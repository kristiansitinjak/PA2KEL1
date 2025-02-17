<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Halaman utama
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/causes', function () {
    return view('causes');
})->name('causes');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/volunteer', function () {
    return view('volunteer');
})->name('volunteer');

Route::get('/donation', function () {
    return view('donation');
})->name('donation');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/404', function () {
    return view('404');
})->name('error404');
