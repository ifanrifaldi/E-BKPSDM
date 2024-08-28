<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Inisialisasi variabel user
        $user = null;

        // Cek apakah admin sudah login
        if (auth()->guard('admin')->check()) {
            $user = auth()->guard('admin')->user();
            $userType = 'admin';
        }
        // Cek apakah pegawai sudah login
        elseif (auth()->guard('pegawai')->check()) {
            $user = auth()->guard('pegawai')->user();
            $userType = 'pegawai';
        }

        // Bagikan data user ke semua views jika user sudah login
        if ($user) {
            View::share('user', $user);
            View::share('userType', $userType);
        }

        return $next($request);
    }
}
