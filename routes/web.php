<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {

    Route::get('/', 'home')->name('home');

    Route::get('/tentang', 'about')->name('about');

    Route::get('/layanan', 'services')->name('services');

    Route::get('/layanan/{slug}', 'serviceDetail')
        ->name('services.show');

    Route::get('/kontak', 'contact')->name('contact');

});