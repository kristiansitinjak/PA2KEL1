<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/causes', function () {
    return view('causes');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/donation', function () {
    return view('donation');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});
