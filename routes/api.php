<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;



Route::get('/posts', function () {
  return response()->json([
    'posts' => [
      [
        'title' => 'post one'
      ]
    ]
  ]);
});
