<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pegawai\PegawaiController;
use App\Http\Controllers\Pegawai\MutasiInstansiController;
use App\Http\Controllers\Pegawai\MutasiSekolahController;
use App\Http\Controllers\Pegawai\MutasiMasukController;
use App\Http\Controllers\Pegawai\MutasiKeluarController;
use App\Http\Controllers\Pegawai\PengaduanController;
use App\Http\Controllers\Pegawai\PensiunDizurController;
use App\Http\Controllers\Pegawai\PensiunBujaduyaController;
use App\Models\Pegawai;

Route::middleware('auth:pegawai')->group(function () {
    // Tambahkan rute-rute pegawai di sini
    Route::get('/', [PegawaiController::class, 'dashboard'])->name('pegawai');
    // Tambahkan rute-rute lainnya...
    Route::resource('mutasiinstansi', MutasiInstansiController::class);
    Route::put('/mutasiinstansi/{id}', [MutasiInstansiController::class, 'update']);
    Route::post('mutasiinstansi/{mutasiinstansi}/post', [MutasiInstansiController::class, 'Post'])->name('mutasiinstansi.post');
    Route::post('pegawai/mutasiinstansi/{mutasiinstansi}/updatestatus', [MutasiInstansiController::class, 'updateStatus'])->name('mutasiinstansi.updateStatus');



    Route::resource('mutasisekolah', MutasiSekolahController::class);
    Route::resource('mutasimasuk', MutasiMasukController::class);
    Route::resource('mutasikeluar', MutasiKeluarController::class);
    Route::resource('pegawai', PegawaiController::class);
    Route::get('pegawai/edit-password/{id}', [PegawaiController::class, 'editPassword'])->name('pegawai.edit.password');
    Route::put('pegawai/update-password/{id}', [PegawaiController::class, 'updatePassword'])->name('pegawai.update.password');
    //pensiun
    Route::resource('pensiundizur', PensiunDizurController::class);
    Route::resource('pensiunbujaduya', PensiunBujaduyaController::class);
    Route::resource('pengaduan', PengaduanController::class);
});
