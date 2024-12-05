<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Service;

class SubcategoryController extends Controller
{
    // Show subcategories of a specific service
    public function index(Service $service)
    {
        $subcategories = $service->subcategories; // Get related subcategories
        return view('front.services.subcategories.index', compact('service', 'subcategories'));
    }

    // Show details of a specific subcategory
    public function show(Subcategory $subcategory)
    {
        return view('front.services.subcategories.show', compact('subcategory'));
    }
}