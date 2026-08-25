@extends('layouts.app')

@section('title', 'Guides | Solutions Delivered')
@section('meta_description', 'Practical guides on outsourced IT leadership, continuity, Cyber Essentials, ISO 27001 and AI adoption for small businesses.')

@push('schema')
<x-schema.breadcrumb :items="[
    ['name' => 'Home', 'url' => route('home')],
    ['name' => 'Guides'],
]" />
@endpush

@section('content')
<x-page-header
    eyebrow="Guides"
    title="Guides for owner-managed businesses"
    lead="Practical, plain-English guides on the technology decisions small businesses face: outsourced IT leadership, continuity, compliance and AI adoption." />

<section class="mx-auto max-w-6xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
    @if($groupedByCluster->isEmpty())
        <p class="text-muted">No guides published yet. Check back soon.</p>
    @else
        <div class="space-y-14">
            @foreach($groupedByCluster as $clusterSlug => $guides)
                @php($cluster = config('guide_clusters.'.$clusterSlug))
                <div>
                    <x-section-heading :lead="$cluster['description']">
                        {{ $cluster['label'] }}
                    </x-section-heading>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        @foreach($guides as $guide)
                            <x-card>
                                <a href="{{ route('guides.show', $guide->slug) }}" class="block">
                                    <h3 class="font-semibold text-ink">{{ $guide->title }}</h3>
                                    <p class="mt-2 text-sm leading-relaxed text-muted">{{ $guide->description }}</p>
                                    <time class="mt-3 block text-xs text-muted" datetime="{{ $guide->date->toDateString() }}">
                                        {{ $guide->date->format('d M Y') }}
                                    </time>
                                </a>
                            </x-card>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</section>
@endsection
