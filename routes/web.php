<?php

use Illuminate\Support\Facades\Route;

// Admin Controller
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\Admin\KotaController;
use App\Http\Controllers\Admin\SesiController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\LokasiController;
use App\Http\Controllers\Admin\GalleryController;

use App\Http\Controllers\Admin\PesertaController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Panel\BiodataController;
use App\Http\Controllers\Admin\BidangUjiController;
use App\Http\Controllers\Admin\InstitusiController;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Admin\TanggalUjiController;

// Panel Controller
use App\Http\Controllers\Admin\TipePesertaController;
use App\Http\Controllers\Admin\KategoriBeritaController;
use App\Http\Controllers\Panel\DatasertifikatController;
use App\Http\Controllers\Admin\PerguruanTinggiController;
use App\Http\Controllers\Admin\AssesmentMandiriController;
use App\Http\Controllers\Panel\PekerjaanPesertaController;
use App\Http\Controllers\Panel\PendaftaranujianController;
use App\Http\Controllers\Panel\PendidikanPesertaController;
use App\Http\Controllers\Admin\KlasifikasiPekerjaanController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [VisitorController::class, 'beranda'])->name('visitor.beranda');
Route::get('/profile', [VisitorController::class, 'profile'])->name('visitor.profile');
Route::get('/register', [VisitorController::class, 'registrasi'])->name('visitor.registrasi');
Route::get('/login', [VisitorController::class, 'login'])->name('visitor.login');
Route::get('/jadwal', [VisitorController::class, 'jadwal'])->name('visitor.jadwal');
Route::get('/berita-umum', [VisitorController::class, 'berita_umum'])->name('visitor.berita_umum');
Route::get('/berita-analisis', [VisitorController::class, 'berita_analisis'])->name('visitor.berita_analisis');
Route::get('/gallery', [VisitorController::class, 'gallery'])->name('visitor.gallery');
Route::get('/contact-us', [VisitorController::class, 'contact'])->name('visitor.contact');





// ===================================================================================================== //





// Admin page Route

Route::get('/admin', function () {
    return view('admin-page.dashboard.index');
});

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin-page.dashboard.index');
    });

    Route::resource('tipe-peserta', TipePesertaController::class);
    Route::resource('perguruan-tinggi', PerguruanTinggiController::class);
    Route::resource('institusi', InstitusiController::class);
    Route::resource('klasifikasi', KlasifikasiPekerjaanController::class);
    Route::resource('kota', KotaController::class);
    Route::resource('lokasi', LokasiController::class);
    Route::resource('bidang', BidangUjiController::class);
    Route::resource('tanggal', TanggalUjiController::class);
    Route::resource('sesi', SesiController::class);
    Route::resource('assesment_mandiri', AssesmentMandiriController::class);
    Route::resource('kategori-berita', KategoriBeritaController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('setting', SettingController::class);
    Route::get('/getInstitusi/{id}', [BiodataController::class, 'getInstitusi'])->name('getInstitusi');
    Route::get('/getLokasi/{id}', [PendaftaranujianController::class, 'getLokasi'])->name('getLokasi');
    Route::get('/getTanggal/{id}', [PendaftaranujianController::class, 'getTanggal'])->name('getTanggal');
    Route::get('/getSesi/{id}', [PendaftaranujianController::class, 'getSesi'])->name('getSesi');
    Route::get('/getAssesmentMandiri/{id}', [PendaftaranujianController::class, 'getAssesmentMandiri'])->name('getAssesmentMandiri');

    Route::prefix('jadwal')->group(function () {
        Route::get('/', [JadwalController::class, 'index'])->name('jadwal.index');
        // Route::get('/show', [JadwalController::class, 'show'])->name('jadwal.show');
        // Route::post('/store', [JadwalController::class, 'store'])->name('jadwal.store');
        // Route::get('/delete/{id}', [JadwalController::class, 'destroy'])->name('jadwal.delete');
    });

    Route::prefix('peserta')->group(function () {
        Route::get('/', [PesertaController::class, 'index'])->name('peserta.index');
        Route::get('/show', [PesertaController::class, 'show'])->name('peserta.show');
        // Route::post('/store', [PesertaController::class, 'store'])->name('peserta.store');
        // Route::get('/delete/{id}', [PesertaController::class, 'destroy'])->name('peserta.delete');
    });

    Route::prefix('web-banner')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('banner.index');
        // Route::get('/show/{id}', [BannerController::class, 'show'])->name('banner.show');
        // Route::post('/store', [BannerController::class, 'store'])->name('banner.store');
        // Route::get('/delete/{id}', [BannerController::class, 'destroy'])->name('banner.delete');
    });

    Route::prefix('web-berita')->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('berita.index');
    });

    Route::prefix('web-gallery')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
        // Route::get('/show/{id}', [GalleryController::class, 'show'])->name('gallery.show');
        // Route::post('/store', [GalleryController::class, 'store'])->name('gallery.store');
        // Route::get('/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');
    });
});





// ===================================================================================================== //





// Panel User route

Route::prefix('panel')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('panel.index');
    Route::resource('biodata', BiodataController::class);
    Route::resource('pekerjaan_peserta', PekerjaanPesertaController::class);
    Route::resource('pendidikan_peserta', PendidikanPesertaController::class);
    Route::prefix('data-sertifikat')->group(function () {

        Route::get('/', [DatasertifikatController::class, 'index'])->name('data-sertifikat.index');

    });

    Route::prefix('pendaftaran')->group(function () {
        // Route::get('/', [PendaftaranujianController::class, 'index'])->name('pendaftaran-ujian.index');
        Route::get('/step_one', [PendaftaranujianController::class, 'createStepOne'])->name('pendaftaran.step_one');
        Route::post('/step_one', [PendaftaranujianController::class, 'postCreateStepOne'])->name('pendaftaran.save_step_one');
        Route::get('/step_two', [PendaftaranujianController::class, 'createStepTwo'])->name('pendaftaran.step_two');
        Route::post('/step_two', [PendaftaranujianController::class, 'postCreateStepTwo'])->name('pendaftaran.save_step_two');
        Route::get('/step_three', [PendaftaranujianController::class, 'createStepThree'])->name('pendaftaran.step_three');
        Route::post('/step_three', [PendaftaranujianController::class, 'postCreateStepThree'])->name('pendaftaran.save_step_three');
        Route::get('/step_four', [PendaftaranujianController::class, 'createStepFour'])->name('pendaftaran.step_four');
        Route::post('/step_four', [PendaftaranujianController::class, 'postCreateStepFour'])->name('pendaftaran.save_step_four');
        Route::get('/bukti-daftar', [PendaftaranujianController::class, 'buktiDaftar'])->name('pendaftaran.bukti.daftar');
    });

});
