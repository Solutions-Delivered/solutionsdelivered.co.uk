<?php

namespace App\Models;

use Carbon\Carbon;

class Guide
{
    public readonly string $title;

    public readonly string $slug;

    public readonly Carbon $date;

    public readonly Carbon $updated;

    public readonly string $cluster;

    public readonly string $description;

    public readonly string $body;

    public readonly string $html;

    public function __construct(array $frontmatter, string $body, string $html)
    {
        $this->title = $frontmatter['title'];
        $this->slug = $frontmatter['slug'];
        $this->date = Carbon::parse($frontmatter['date']);
        $this->updated = isset($frontmatter['updated'])
            ? Carbon::parse($frontmatter['updated'])
            : $this->date;
        $this->cluster = $frontmatter['cluster'];
        $this->description = $frontmatter['description'];
        $this->body = $body;
        $this->html = $html;
    }
}
