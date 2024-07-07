<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('app', ['title' => 'Home Page']);
})->name('home');

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Adi Kurniawan']);
})->name('about');

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/{post:slug}', 'show')->name('posts.show');
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');
