<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('pages.content.beranda.Beranda');
})->name("home");

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
        return view("pages.content.fitur.bansos");
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

Route::get('/mitra', function () {
    return view('pages.content.mitra.mitra');
})->name("mitra");

Route::get('/artikel', function () {
    return view('pages.content.artikel.artikel');
})->name("artikel");

Route::get('/contact', function () {
    return view('pages.content.contact.contact');
})->name("contact");

//Register
Route::get('/daftar-digides', [RegisterController::class , 'ViewRegister'] )->name("view.register");
Route::post('/register' , [RegisterController::class , 'handleRegister'])->name('get.form-register');

