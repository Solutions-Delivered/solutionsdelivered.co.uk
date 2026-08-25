<?php

namespace App\Services;

use App\Models\Guide;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class GuideRepository
{
    private const DIRECTORY = 'content/guides';

    public function __construct(
        private GuideMarkdownParser $parser,
    ) {}

    public function all(): Collection
    {
        $directory = base_path(self::DIRECTORY);

        if (! File::isDirectory($directory)) {
            return collect();
        }

        $cacheKey = 'guides.'.$this->directoryHash($directory);

        if (app()->environment('production')) {
            return Cache::remember($cacheKey, 3600, fn () => $this->parseDirectory($directory));
        }

        return $this->parseDirectory($directory);
    }

    public function findBySlug(string $slug): ?Guide
    {
        return $this->all()->firstWhere('slug', $slug);
    }

    public function byCluster(string $cluster): Collection
    {
        return $this->all()->filter(fn (Guide $guide) => $guide->cluster === $cluster)->values();
    }

    /** @return Collection<string, Collection<int, Guide>> guides grouped by cluster, in config('guide_clusters') order */
    public function groupedByCluster(): Collection
    {
        $grouped = $this->all()->groupBy('cluster');

        return collect(array_keys(config('guide_clusters')))
            ->mapWithKeys(fn (string $slug) => [$slug => $grouped->get($slug, collect())])
            ->filter(fn (Collection $guides) => $guides->isNotEmpty());
    }

    private function parseDirectory(string $directory): Collection
    {
        return collect(File::glob($directory.'/*.md'))
            ->map(fn (string $path) => $this->parser->parse(File::get($path)))
            ->sortByDesc('date')
            ->values();
    }

    private function directoryHash(string $directory): string
    {
        $files = File::glob($directory.'/*.md');
        $hash = '';

        foreach ($files as $file) {
            $hash .= $file.File::lastModified($file);
        }

        return md5($hash);
    }
}
