<?php


use App\Http\Controllers\User\PagesController; //must be placed at the top of routes
use App\Models\Service;
use App\Models\Subcategory;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubcategoryController;


use Illuminate\Support\Facades\Route;

Route::get('#', [PagesController::class, 'home']);
Route::get('/', [PagesController::class, 'home']);
Route::get('/aboutus', [PagesController::class, 'aboutus']);
Route::get('/calculator', [PagesController::class, 'calculator']);
Route::get('/faq', [PagesController::class, 'faq']);
Route::get('/protfolio', [PagesController::class, 'protfolio']);
Route::get('/protfoliodetails', [PagesController::class, 'protfoliodetails']);
Route::get('/team', [PagesController::class, 'team']);
Route::get('/team1', [PagesController::class, 'team1']);
Route::get('/team2', [PagesController::class, 'team2']);
Route::get('/testimonial', [PagesController::class, 'testimonial']);
Route::get('/testimonial1', [PagesController::class, 'testimonial1']);
Route::get('/testimonial2', [PagesController::class, 'testimonial2']);
Route::get('/testimonial3', [PagesController::class, 'testimonial3']);


/////////////
// Route for displaying all services


// Services Page - Show all main services
Route::get('/services', [ServiceController::class, 'index'])->name('front.services.index');

// Subcategories Page - Show subcategories of a specific service
Route::get('/services/{service}', [SubcategoryController::class, 'index'])->name('front.services.subcategories.index');

// Details Page - Show details of a specific subcategory
Route::get('/subcategories/{subcategory}', [SubcategoryController::class, 'show'])->name('front.services.subcategories.show');