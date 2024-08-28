<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\JenisProdukController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\ProsedurDesainController;
use App\Http\Controllers\Admin\ProsedurOrderController;
use App\Http\Controllers\Admin\ProsedurProduksiController;
use App\Http\Controllers\Admin\BukuTamuController;
use App\Http\Controllers\Admin\MutasiInstansiController;
use App\Http\Controllers\Admin\MutasiSekolahController;
use App\Http\Controllers\Admin\MutasiMasukController;
use App\Http\Controllers\Admin\MutasiKeluarController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\PensiunDizurController;
use App\Http\Controllers\Admin\PensiunBujaduyaController;
use App\Http\Controllers\Admin\ProsedurPengajuanController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Models\MutasiInstansi;
use App\Models\Pegawai;
use App\Models\PensiunDizur;

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', [AdminController::class, 'dashboard']);

    Route::resource('admin', AdminController::class);
    Route::resource('pegawai', PegawaiController::class);

    Route::resource('jenis-produk', JenisProdukController::class);

    Route::resource('produk', ProdukController::class);
    Route::post('produk/store-galeri-produk', [ProdukController::class, 'storeGaleri']);
    Route::get('produk/delete-galeri/{galeri_produk}', [ProdukController::class, 'deleteGaleri']);

    // Route::resource('bukutamu', BukuTamuController::class);
    // Route::post('bukutamu/store-bukutamu', [BukuTamuController::class, 'storeBukutamu']);
    // Route::get('produk/delete-bukutamu/{bukutamu}', [BukuTamuController::class, 'deleteGaleri']);

    Route::resource('blog', BlogController::class);
    Route::get('blog/{blog}/komentar', [BlogController::class, 'showKomentar']);
    Route::post('blog/store-balasan', [BlogController::class, 'storeBalasan']);

    Route::resource('profil', ProfilController::class);
    Route::resource('bukutamu', BukuTamuController::class);

    //mutasi admin
    Route::resource('mutasiinstansi', MutasiInstansiController::class);
    Route::post('mutasiinstansi/updatecolumn', [MutasiInstansiController::class, 'updateColumn']);
    // routes/web.php
   
    Route::resource('mutasisekolah', MutasiSekolahController::class);
    Route::resource('mutasikeluar', MutasiKeluarController::class);
    Route::resource('mutasimasuk', MutasiMasukController::class);
    //pensiun
    Route::resource('pensiundizur', PensiunDizurController::class);
    Route::resource('pensiunbujaduya', PensiunBujaduyaController::class);
    //prosedur
    Route::resource('prosedurpengajuan', ProsedurPengajuanController::class);

    Route::resource('prosedur/desain', ProsedurDesainController::class);
    Route::resource('prosedur/order', ProsedurOrderController::class);
    Route::resource('prosedur/produksi', ProsedurProduksiController::class);

    Route::resource('galeri', GaleriController::class);
    Route::post('galeri/store-galeri', [GaleriController::class, 'galeri']);
    Route::get('galeri/delete-galeri/{galerigaleri}', [GaleriController::class, 'galeriDelete']);

    Route::resource('mitra', MitraController::class);
    Route::resource('pengaduan', PengaduanController::class);
});

// Route::group(['middleware' => 'auth:pegawai'], function () {
//     Route::get('/', [PegawaiController::class, 'dashboard']);

//     Route::resource('pegawai', PegawaiController::class);
// });