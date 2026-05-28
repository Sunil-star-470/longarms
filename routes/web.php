<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact-us', function () {
    return view('navbar');
})->name('contact');

Route::view('/contact', 'contact')->name('contact.show');
Route::view('/services', 'service')->name('service.index');

