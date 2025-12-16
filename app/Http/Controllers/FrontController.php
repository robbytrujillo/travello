<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PackageTour;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index() {
        $categories = Category::orderByDesc('id')->take(5)->get();
        $package_tours = PackageTour::orderByDesc('id')->take(5)->get();
        return view('front.index', compact('package_tours', 'categories'));
    }

    public function details(PackageTour $packageTour) {
        return view('front.details', compact('packageTour'));
    }
}