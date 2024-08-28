<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Admin;
use App\Models\Pegawai;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // public function boot(): void
    // {
    //     //
    // }
    public function boot()
    {
        // Menggunakan View Composer untuk menyediakan data admin dan pegawai ke semua tampilan
        View::composer('*', function ($view) {
            $admin = Admin::first(); // Misalnya Anda ingin mengambil admin pertama dari database
            $pegawai = Pegawai::first(); // Misalnya Anda ingin mengambil pegawai pertama dari database
            $view->with('admin', $admin)->with('pegawai', $pegawai);
        });
    }
}
