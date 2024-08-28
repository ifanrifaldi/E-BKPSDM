<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginAdmin()
    {
        return view('login');
    }

    public function loginAdminProses()
    {
        if (auth()->guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin')->with('success', 'Login Berhasil');
        }

        return redirect('loginadmin')->with('danger', 'Login Gagal, Username dan Password tidak sesuai');
    }

    public function logoutAdmin(Request $request)
    {
        auth()->guard('admin')->logout();  // Pastikan keluar dari guard admin
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success','Logout Berhasil');
    }

    // Login pegawai
    public function login()
    {
        return view('loginpegawai');
    }

    public function loginProses()
    {
        if (auth()->guard('pegawai')->attempt(['nip' => request('nip'), 'password' => request('password')])) {
            return redirect('pegawai')->with('success', 'Login Berhasil');
        }

        return redirect('login')->with('danger','Login Gagal, NIP dan Password tidak sesuai');
    }

    public function logout(Request $request)
    {
        auth()->guard('pegawai')->logout();  // Pastikan keluar dari guard pegawai
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success','Logout Berhasil');
    }
}
