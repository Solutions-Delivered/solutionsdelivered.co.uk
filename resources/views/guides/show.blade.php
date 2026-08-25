@extends('layouts.app')

@section('title', $guide->title.' | Solutions Delivered')
@section('meta_description', $guide->description)
@section('og_title', $guide->title)
@section('og_description', $guide->description)
@section('og_type', 'article')
@section('twitter_title', $guide->title)
@section('twitter_description', $guide->description)

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'Guides', 'url' => route('guides.index')],
    ['name' => $guide->title],
]" />
{{-- Laravel 13 compiles a literal at-context key as a Blade
    directive, which corrupts the JSON-LD. Build the key at runtime. --}}
<script type="application/ld+json">
{!! json_encode([
    '@'.'context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $guide->title,
    'description' => $guide->description,
    'url' => route('guides.show', $guide->slug),
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => route('guides.show', $guide->slug),
    ],
    'datePublished' => $guide->date->toIso8601String(),
    'dateModified' => $guide->updated->toIso8601String(),
    'author' => [
        '@type' => 'Organization',
        'name' => config('brand.company.legal_name'),
        'url' => url('/'),
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => config('brand.company.legal_name'),
        'url' => url('/'),
    ],
], JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')
<x-page-header
    eyebrow="{{ config('guide_clusters.'.$guide->cluster.'.label', 'Guides') }}"
    title="{{ $guide->title }}" />

<section class="mx-auto max-w-3xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
    <div class="mb-8 flex flex-wrap items-center gap-x-4 gap-y-1 text-sm text-muted">
        <time datetime="{{ $guide->date->toDateString() }}">{{ $guide->date->format('d M Y') }}</time>
        @if($guide->updated->ne($guide->date))
            <span>Updated {{ $guide->updated->format('d M Y') }}</span>
        @endif
    </div>

    <div class="legal">
        {!! $guide->html !!}
    </div>

    <div class="mt-14 border-t border-border pt-10">
        <x-button :href="route('contact')">Talk to us</x-button>
    </div>
</section>
@endsection
