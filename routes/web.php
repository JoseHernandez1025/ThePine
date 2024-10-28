<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/category', 'category')->name('category');
Route::view('/about', 'about')->name('about');
