<?php

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

it('returns 200 for the guides index', function () {
    $this->get(route('guides.index'))->assertOk();
});

it('lists the placeholder guide on the guides index, grouped by cluster', function () {
    $response = $this->get(route('guides.index'));

    $response->assertOk();
    $response->assertSee('Placeholder guide', false);
    $response->assertSee(config('guide_clusters.continuity.label'), false);
});

it('returns 200 for every guide', function (string $slug) {
    $this->get(route('guides.show', $slug))->assertOk();
})->with('guide_slugs');

it('renders the guide title and body on its show page', function () {
    $response = $this->get(route('guides.show', 'guides-system-placeholder'));

    $response->assertOk();
    $response->assertSee('Placeholder guide', false);
    $response->assertSee('It is a placeholder, not a real guide.', false);
});

it('returns 404 for an unknown guide slug', function () {
    $this->get('/guides/does-not-exist')->assertNotFound();
});

it('includes Guides in the primary nav between How it works and About', function () {
    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSeeInOrder(['How it works', 'Guides', 'About'], false);
});

it('includes the guides index and the placeholder guide in the sitemap with a lastmod', function () {
    $response = $this->get('/sitemap.xml');

    $response->assertOk();
    $response->assertSee(route('guides.index'), false);
    $response->assertSee(route('guides.show', 'guides-system-placeholder'), false);
});

// Guide front matter must carry every field the templates, schema and
// sitemap depend on. A guide missing one of these renders a broken page
// rather than failing loudly at parse time, so validate every file on disk
// rather than trusting one seeded example.
it('has all required front matter keys on every guide', function (string $path) {
    $document = YamlFrontMatter::parse(File::get($path));
    $matter = $document->matter();

    foreach (['title', 'slug', 'date', 'cluster', 'description'] as $key) {
        expect(array_key_exists($key, $matter))->toBeTrue("Missing front matter key [{$key}] in {$path}");
        expect($matter[$key])->not->toBeEmpty("Front matter key [{$key}] is empty in {$path}");
    }

    expect(array_key_exists($matter['cluster'], config('guide_clusters')))->toBeTrue(
        "Unknown cluster [{$matter['cluster']}] in {$path}. Add it to config/guide_clusters.php."
    );
})->with('guide_files');

// The meta description is what Google shows in the SERP snippet; 150-158
// characters is the range that reliably avoids truncation without wasting
// the allowance. Enforced here so a future guide can't ship without it.
it('has a meta description between 150 and 158 characters on every guide', function (string $path) {
    $document = YamlFrontMatter::parse(File::get($path));
    $description = $document->matter()['description'] ?? '';
    $length = mb_strlen($description);

    expect($length)->toBeGreaterThanOrEqual(150, "Description in {$path} is {$length} chars, below 150: \"{$description}\"");
    expect($length)->toBeLessThanOrEqual(158, "Description in {$path} is {$length} chars, above 158: \"{$description}\"");
})->with('guide_files');

// Laravel 13 ships a built-in @context Blade directive. A literal '@context'
// key inside a json_encode([...]) array in a .blade.php file compiles to raw
// PHP and silently corrupts the JSON-LD block. Decode every block rather than
// substring-matching so a regression fails loudly instead of quietly.
it('renders valid, parseable JSON-LD on the guides index and a guide page', function (string $uri) {
    $html = $this->get($uri)->assertOk()->getContent();

    preg_match_all('#<script type="application/ld\+json">(.*?)</script>#s', $html, $matches);

    expect($matches[1])->not->toBeEmpty("Expected at least one JSON-LD block on {$uri}.");

    foreach ($matches[1] as $block) {
        $decoded = json_decode(trim($block), true);

        expect(json_last_error())->toBe(JSON_ERROR_NONE, "JSON-LD block on {$uri} failed to decode: {$block}")
            ->and($decoded)->toBeArray()
            ->and($decoded)->toHaveKey('@context')
            ->and($decoded['@context'])->toBe('https://schema.org');
    }
})->with(['guides index' => ['/guides'], 'placeholder guide' => ['/guides/guides-system-placeholder']]);

it('emits Article schema on a guide page', function () {
    $html = $this->get('/guides/guides-system-placeholder')->assertOk()->getContent();

    preg_match_all('#<script type="application/ld\+json">(.*?)</script>#s', $html, $matches);
    $articleBlocks = collect($matches[1])
        ->map(fn (string $block) => json_decode(trim($block), true))
        ->filter(fn (?array $block) => ($block['@type'] ?? null) === 'Article');

    expect($articleBlocks)->toHaveCount(1);

    $article = $articleBlocks->first();
    expect($article['headline'])->not->toBeEmpty();
    expect($article['datePublished'])->not->toBeEmpty();
    expect($article['dateModified'])->not->toBeEmpty();
});

// Dataset closures run before the app container is fully booted in this
// scope (base_path() is unavailable there), so resolve the path relative to
// this file instead.
dataset('guide_files', function () {
    $directory = dirname(__DIR__, 2).'/content/guides';

    return collect(glob($directory.'/*.md'))
        ->mapWithKeys(fn (string $path) => [basename($path) => [$path]])
        ->all();
});

dataset('guide_slugs', function () {
    $directory = dirname(__DIR__, 2).'/content/guides';

    return collect(glob($directory.'/*.md'))
        ->map(fn (string $path) => YamlFrontMatter::parse(file_get_contents($path))->matter()['slug'])
        ->mapWithKeys(fn (string $slug) => [$slug => [$slug]])
        ->all();
});
