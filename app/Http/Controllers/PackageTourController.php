<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PackageTour;
use Illuminate\Http\Request;

class PackageTourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $package_tours = PackageTour::orderByDesc('id')->paginate(10);
        return view('admin.package_tours.index', compact('package_tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::orderByDesc('id');
        return view('admin.package_tours.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PackageTour $packageTour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PackageTour $packageTour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PackageTour $packageTour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PackageTour $packageTour)
    {
        //
    }
}