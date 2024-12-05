<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    // Show all services
    public function index()
    {
        $services = Service::all();
        return view('front.services.index', compact('services'));
    }
}