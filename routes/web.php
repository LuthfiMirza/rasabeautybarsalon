<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;





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


// Halaman utama dan section-sectionnya
Route::get('/', function () {
    return view('index');
});

// Tambahkan route untuk handle /index yang redirect ke home
Route::get('/index', function () {
    return redirect('/');
});

// Halaman about
Route::get('/about', function () {
    return view('about'); // about.blade.php
});

// Halaman booking (form input reservasi)
Route::get('/book', [ReservationController::class, 'book'])->name('reservation.book');

// Proses data booking ke halaman ringkasan (summary)
Route::post('/reservation/summary', [ReservationController::class, 'summary'])->name('reservation.summary');

// Simpan reservasi ke database setelah konfirmasi
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

// Halaman terima kasih setelah reservasi berhasil
Route::get('/reservation/thankyou', [ReservationController::class, 'thankyou'])->name('reservation.thankyou');
Route::get('/reservation/thankyou/{id}', [ReservationController::class, 'thankYou'])->name('reservation.thankyou');

