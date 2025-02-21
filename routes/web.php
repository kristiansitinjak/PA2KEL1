<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanKeuanganController;




Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/news', function () {
    return view('news');
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

Route::get('/contact',function (){
    return view('contact');
});



Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');

Route::get('/', function () {
    return view('home'); 
})->name('home');



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



Route::get('/keuangan', [LaporanKeuanganController::class, 'index'])->name('keuangan.index');
Route::get('/keuangan/create', [LaporanKeuanganController::class, 'create'])->name('keuangan.create');
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/keuangan', [LaporanKeuanganController::class, 'index'])->name('admin.keuangan.index');
});
Route::resource('keuangan', LaporanKeuanganController::class);
