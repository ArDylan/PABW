<?php

use App\Http\Controllers\Mitra\ManagementFlight;
use App\Http\Controllers\Mitra\ManagementFlightController;
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
Route::get('/home/plane', [App\Http\Controllers\HomeController::class, 'plane'])->name('home.plane');
Route::get('/home/hotel', [App\Http\Controllers\HomeController::class, 'hotel'])->name('home.hotel');

Route::get('/home/detail/tiket', [App\Http\Controllers\Plane\TiketController::class, 'detailTiket'])->name('detail.tiket');

Route::prefix('management')->group(function () {
    Route::prefix('flight')->group(function () {
        Route::controller(ManagementFlightController::class)->group(function () {
            Route::get('/', [ManagementFlightController::class, 'index'])->name('management.flight.index');
            Route::post('/store', [ManagementFlightController::class, 'store'])->name('management.flight.store');
            Route::get('/edit', [ManagementFlightController::class, 'edit'])->name('management.flight.edit');
            Route::get('/delete', [ManagementFlightController::class, 'delete'])->name('management.flight.delete');
        });
    });
    Route::prefix('hotel')->group(function () {
    });
});
