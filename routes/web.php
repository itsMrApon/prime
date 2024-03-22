<?php


use GuzzleHttp\Psr7\Request;
use Psy\Command\WhereamiCommand;
use Illuminate\Support\Facades\Route; 
use App\Models\Listing;


//all listing
Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Listings By Apon',
        'listings' => Listing::all()
    ]);
});

//single listing
Route::get('/listings/{id}', function($id) {
    return view('listing',[
        'listing' =>Listing::find($id)
    ]);
});