<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect('/home/hotel');
});

Auth::routes();

// home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/plane', [App\Http\Controllers\HomeController::class, 'airline'])->name('home.plane');
Route::get('/home/detail/tiket', [App\Http\Controllers\Plane\TiketController::class, 'detailTiket'])->name('detail.tiket');

Route::get('/home/hotel', [App\Http\Controllers\HomeController::class, 'hotel'])->name('home.hotel');
Route::get('/home/hotel/{hotel}', [App\Http\Controllers\Hotel\HotelController::class, 'show'])->name('hotel.show');
Route::get('/home/hotel/create', [App\Http\Controllers\Hotel\HotelController::class, 'create'])->name('hotel.create');
Route::post('/home/hotel', [App\Http\Controllers\Hotel\HotelController::class, 'store'])->name('hotel.store');
Route::get('/home/hotel/edit/{hotel}', [App\Http\Controllers\Hotel\HotelController::class, 'edit'])->name('hotel.edit');
Route::post('/home/hotel/update/{hotel}', [App\Http\Controllers\Hotel\HotelController::class, 'update'])->name('hotel.update');
Route::get('/home/hotel/delete/{hotel}', [App\Http\Controllers\Hotel\HotelController::class, 'destroy'])->name('hotel.delete');

Route::get('/home/history', [App\Http\Controllers\HomeController::class, 'history'])->name('history');


Route::get('/admin/saldo', [App\Http\Controllers\Admin\SaldoController::class, 'index'])->name('admin.saldo');
Route::get('/admin/saldo/create', [App\Http\Controllers\Admin\SaldoController::class, 'create'])->name('admin.saldo.create');
Route::post('/admin/saldo', [App\Http\Controllers\Admin\SaldoController::class, 'store'])->name('admin.saldo.store');
Route::get('/admin/saldo/edit/{saldo}', [App\Http\Controllers\Admin\SaldoController::class, 'edit'])->name('admin.saldo.edit');
Route::post('/admin/saldo/update/{saldo}', [App\Http\Controllers\Admin\SaldoController::class, 'update'])->name('admin.saldo.update');
Route::get('/admin/saldo/delete/{saldo}', [App\Http\Controllers\Admin\SaldoController::class, 'destroy'])->name('admin.saldo.delete');
