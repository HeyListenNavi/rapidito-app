<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('test');
});

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/search', 'pages::search')->name('search');
Route::livewire('/cart', 'pages::cart')->name('cart');
Route::livewire('/profile', 'pages::profile')->name('profile');
Route::livewire('/restaurant', 'pages::restaurant')->name('restaurant');
