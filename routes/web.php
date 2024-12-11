<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DataController;
use App\Http\Controllers\Content\ArtikelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Content
Route::prefix('/')->group(function () {

    Route::get('', function () {
        return view('pages.content.beranda.Beranda');
    })->name("home");

    Route::get('mitra', function () {
        return view('pages.content.mitra.mitra');
    })->name("mitra");
    //Artikel
    Route::get('artikel', ArtikelController::class)->name("artikel");

    Route::get('contact', function () {
        return view('pages.content.contact.contact');
    })->name("contact");

    //Resource Register
    Route::resource('daftar-digides' , RegisterController::class)->only([
        'index' , 'create'
    ])->missing(function (Request $request){
        return Redirect::route('daftar-digides.index')->with('error' , 'Data Gagal Dibuat');
    });

    //Resource Login dan Logout
    Route::apiResource('masuk-digides' , LoginController::class)->only([
        'index' , 'store'
    ])->missing(function (Request $request){
        return Redirect::route('daftar-digides.index')->with('error' , 'Data Tidak Ditemukan');
    });;
    //Logout
    Route::get('/logout' , [LogoutController::class , 'handleLogout'])->name('logout');
});

//Route Group For Fitur
Route::prefix('fitur')->group(function () {
    Route::get('/administrasi', function () {
        return view("pages.content.fitur.adminitrasi");
    })->name("fitur.administrasi");

    Route::get('/pelayanan', function () {
        return view("pages.content.fitur.pelayananDesa");
    })->name("fitur.pelayanan");

    Route::get('/perpajakan', function () {
        return view("pages.content.fitur.perpajakan");
    })->name("fitur.perpajakan");

    Route::get('/bantuan', function () {
        return view("pages.content.5y.bansos");
    })->name("fitur.bantuan");

    Route::get('/website-profil', function () {
        return view("pages.content.fitur.websiteProfil");
    })->name("fitur.website");

    Route::get('/Digides-mobile-app', function () {
        return view("pages.content.fitur.digides");
    })->name("fitur.digides");

    Route::get('/andi-smart', function () {
        return view("pages.content.fitur.andiSmart");
    })->name("fitur.andi");

    Route::get('/absensi', function () {
        return view("pages.content.fitur.absensi");
    })->name("fitur.absensi");

    Route::get('/absensi-buku', function () {
        return view("pages.content.fitur.absensi-buku");
    })->name("fitur.absensi-buku");

    Route::get('/siskeudes-online', function () {
        return view("pages.content.fitur.siskeudesOnline");
    })->name("fitur.siskeudes");

    Route::get('/webgis', function () {
        return view("pages.content.fitur.webgis");
    })->name("fitur.webgis");

    Route::get('/pendekar', function () {
        return view("pages.content.fitur.pendekar");
    })->name("fitur.pendekar");

    Route::get('/kios', function () {
        return view("pages.content.fitur.kios");
    })->name("fitur.kios");
});



//Register
//dashboard
Route::prefix('dashboard')->middleware(['role'])->group(function () {

    //dashboard Data Controller
    Route::controller(DataController::class)->group(function () {
        //Menampilkan View Blade
        Route::get('/data', 'ViewData')->name('dashboard.data-user');
        //Menghapus Data di View Blade Data Tersebut
        Route::delete('/data/delete', 'handleDelete')->name('delete.data');
        //Mengedit Data Di View Data Tersebut
        Route::put('data/edit', 'handleEdit')->name('edit.data');
    });

    Route::get('/artikel', function () {
        return view('dashboard.content.data-artikel');
    })->name('dashboard.data-artikel');

    Route::get('/notification', function () {
        return view('dashboard.content.notifacation');
    })->name('dashboard.notification');

    Route::get('/profile', function () {
        return view('dashboard.content.profile');
    })->name('dashboard.profile');
});

Route::get('/counter', Counter::class);




