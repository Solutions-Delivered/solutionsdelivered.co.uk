<?php

namespace App\Services;

use App\Models\Guide;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension;
use League\CommonMark\MarkdownConverter;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class GuideMarkdownParser
{
    private MarkdownConverter $converter;

    public function __construct()
    {
        $environment = new Environment([
            'heading_permalink' => [
                'html_class' => 'heading-permalink',
                'symbol' => '#',
                'insert' => 'after',
                'title' => 'Permalink',
            ],
        ]);

        $environment->addExtension(new CommonMarkCoreExtension);
        $environment->addExtension(new GithubFlavoredMarkdownExtension);
        $environment->addExtension(new HeadingPermalinkExtension);

        $this->converter = new MarkdownConverter($environment);
    }

    public function parse(string $content): Guide
    {
        $document = YamlFrontMatter::parse($content);

        $body = $document->body();
        $html = $this->converter->convert($body)->getContent();
        $html = $this->normaliseHeadings($html, (string) ($document->matter()['title'] ?? ''));

        return new Guide(
            frontmatter: $document->matter(),
            body: $body,
            html: $html,
        );
    }

    /**
     * Guide bodies conventionally repeat the title as a leading "# Title",
     * which duplicates the page's own <h1> (bad for SEO and accessibility).
     * Drop a leading <h1> that matches the title, then demote any remaining
     * <h1> to <h2> so the page always has exactly one <h1>.
     */
    private function normaliseHeadings(string $html, string $title): string
    {
        $html = preg_replace_callback(
            '/^\s*<h1\b[^>]*>(.*?)<\/h1>/is',
            function (array $m) use ($title) {
                return $this->sameHeading(strip_tags($m[1]), $title) ? '' : $m[0];
            },
            $html,
            1,
        );

        $html = preg_replace('/<(\/?)h1\b/i', '<$1h2', $html);

        return ltrim($html);
    }

    private function sameHeading(string $a, string $b): bool
    {
        $clean = fn (string $s): string => preg_replace('/[^a-z0-9]+/', '', strtolower(html_entity_decode($s)));

        return $clean($a) !== '' && $clean($a) === $clean($b);
    }
}
