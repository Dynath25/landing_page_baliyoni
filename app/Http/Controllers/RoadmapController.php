<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    public function index()
    {
        $roadmapItems = Roadmap::orderBy('display_order')->get()->groupBy('year_range');
        return view('partials.roadmaps', compact('roadmapItems'));
    }
}
