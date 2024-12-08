<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Subcategory;

class ServiceController extends Controller
{
    /**
     * Display all services (e.g., "Auto Insurance", "Home Insurance")
     */
    public function index()
    {
        $services = Service::all();
        return view('front.services.index', compact('services'));
    }

    /**
     * Display subcategories for a specific service (e.g., "Auto Insurance", "Home Insurance")
     */
    public function show($serviceSlug)
    {
        // Find the service using the slug
        $service = Service::where('slug', $serviceSlug)->firstOrFail();
        // Retrieve the subcategories related to this service
        $subcategories = $service->subcategories;
        return view('front.services.show', compact('service', 'subcategories'));
    }

    /**
     * Display details for a specific subcategory
     */
    public function details($serviceSlug, $subcategorySlug)
    {
        // Find the service using the slug
        $service = Service::where('slug', $serviceSlug)->firstOrFail();
        
        // Find the subcategory using the slug and ensure it belongs to the correct service
        $subcategory = Subcategory::where('slug', $subcategorySlug)
            ->where('service_id', $service->id)
            ->firstOrFail();

        return view('front.services.details', compact('service', 'subcategory'));
    }
}

