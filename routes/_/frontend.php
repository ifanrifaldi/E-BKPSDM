<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\RegisterController;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'beranda');
    // Profil
    Route::get('profil', 'profil');
    //seach
    Route::get('/filter', [HomeController::class, 'filter'])->name('filter');
    // Route::get('visimisi', 'visimisi');
    // Route::get('team', 'struktur');
    // blog
    Route::get('blog', 'blog');
    Route::get('blogdetail', 'blogdetail');
    // blog
    Route::get('blog', 'berita');
    Route::get('blog-detail/{berita}', 'beritadetail');
    // Produk
    Route::get('produk/{jenis_produk}', 'show');
    // Route::get('produk/{jenis_produk}', 'view');
    Route::get('kaos', 'kaos');
    Route::get('jaket', 'jaket');
    // Cara Order
    Route::get('caraorder', 'caraorder');
    // Galery
    Route::get('galery', 'galery');
    // Route::get('bisnis', 'bisnis');

    Route::post('store-komentar', [HomeController::class, 'komen']);

    Route::resource('register', RegisterController::class);

    
});