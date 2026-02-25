<?php

namespace App\Http\Controllers;

use App\Models\TourGuide;

class TourGuideController extends Controller
{
    public function index()
    {
        $guides = TourGuide::all();
        return view('tourguide', compact('guides'));
    }


public function show($id)
{
    $guide = TourGuide::findOrFail($id);
    return view('guide-details', compact('guide'));
}
}