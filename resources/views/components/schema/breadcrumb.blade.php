@props(['items' => []])

@if(count($items) > 0)
{{-- Laravel 13 compiles a literal at-context key as a Blade
    directive, which corrupts the JSON-LD. Build the key at runtime. --}}
<script type="application/ld+json">
{!! json_encode([
    '@'.'context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => collect($items)->map(function($item, $index) {
        return [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $item['name'],
            'item' => $item['url'] ?? null
        ];
    })->values()->all()
], JSON_UNESCAPED_SLASHES) !!}
</script>
@endif
