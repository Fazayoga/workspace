<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/dashboard');
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/forgotPassword', function () {
    return view('auth.forgotPassword');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/pegawai', function () {
    return view('pegawai.index');
})->name('pegawai');

Route::get('/tugas-saya', function () {
    return view('tugas.index');
})->name('tugas-saya');

Route::get('/laporan-saya', function () {
    return view('laporan.index');
})->name('laporan-saya');

Route::get('/calender', function () {
    return view('kalender.index');
})->name('calender');

Route::get('data-absensi', function () {
    return view('admin.absensi.index');
})->name('data-absensi');

Route::get('absen-disetujui', function () {
    return view('admin.persetujuan.index');
})->name('absen-disetujui');

Route::get('reimbursement', function () {
    return view('admin.reimbursement.index');
})->name('reimbursement');
