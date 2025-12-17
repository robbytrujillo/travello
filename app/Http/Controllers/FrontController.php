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
        $latestPhotos = $packageTour->package_photos()->orderByDesc('id')->take(3)->get();
        return view('front.details', compact('packageTour', 'latestPhotos'));
    }

    public function book(PackageTour $packageTour) {
        return view('front.book', compact('packageTour'));
    }
}