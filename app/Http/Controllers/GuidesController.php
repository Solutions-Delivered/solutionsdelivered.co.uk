<?php

namespace App\Http\Controllers;

use App\Services\GuideRepository;
use Illuminate\Contracts\View\View;

class GuidesController extends Controller
{
    public function index(GuideRepository $guides): View
    {
        return view('guides.index', [
            'groupedByCluster' => $guides->groupedByCluster(),
        ]);
    }

    public function show(GuideRepository $guides, string $slug): View
    {
        $guide = $guides->findBySlug($slug);

        abort_unless($guide, 404);

        return view('guides.show', [
            'guide' => $guide,
        ]);
    }
}
