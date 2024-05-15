<?php

use App\Http\Controllers\Admin\FlightManagementController;
use App\Http\Controllers\Admin\HotelManagementController;
use App\Http\Controllers\Admin\SaldoController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Hotel\HotelController;
use App\Http\Controllers\Mitra\ManagementFlightController;
use App\Http\Controllers\Mitra\ManagementHotelController;
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

Route::prefix('home')->group(function () {
    Route::get('/hotel', [App\Http\Controllers\HomeController::class, 'hotel'])->name('home.hotel');
    Route::get('/plane', [App\Http\Controllers\HomeController::class, 'airline'])->name('home.plane');
    Route::get('/detail/tiket/{flight}', [App\Http\Controllers\Plane\TiketController::class, 'detailTiket'])->name('detail.tiket');
    Route::post('/ticket/order/{flight}', [App\Http\Controllers\Plane\TiketController::class, 'orderTicket'])->name('order.ticket');
    Route::get('/ticket/history', [App\Http\Controllers\Plane\TiketController::class, 'historyTicket'])->name('history.ticket');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware('auth')->group(function () {
    Route::prefix('hotel')->group(function () {
        Route::controller(HotelController::class)->group(function () {
            Route::get('/{hotel}', 'show')->name('hotel.show');
            Route::get('/create', 'create')->name('hotel.create');
            Route::post('', 'store')->name('hotel.store');
            Route::get('/edit/{hotel}', 'edit')->name('hotel.edit');
            Route::post('/update/{hotel}', 'update')->name('hotel.update');
            Route::get('/delete/{hotel}', 'destroy')->name('hotel.delete');
        });
    });

    Route::prefix('management')->group(function () {
        Route::prefix('flight')->group(function () {
            Route::controller(ManagementFlightController::class)->group(function () {
                Route::get('/', 'index')->name('management.flight.index');
                Route::post('/store', 'store')->name('management.flight.store');
                Route::get('/edit', 'edit')->name('management.flight.edit');
                Route::get('/delete', 'delete')->name('management.flight.delete');
            });
        });

        Route::prefix('hotel')->group(function () {
            Route::controller(ManagementHotelController::class)->group(function () {
                Route::get('/', 'index')->name('management.hotel.index');
                Route::post('/store', 'store')->name('management.hotel.store');
                Route::get('/edit', 'edit')->name('management.hotel.edit');
                Route::get('/delete', 'delete')->name('management.hotel.delete');
                Route::get('/detail/{id}', 'detail')->name('management.hotel.detail');
                // management.hotel.add.rooms
                Route::post('/add/rooms/{id}', 'addRooms')->name('management.hotel.add.rooms');
            });
        });
    });

    Route::get('/history', [App\Http\Controllers\HomeController::class, 'history'])->name('history');

    Route::prefix('admin')->group(function () {

        Route::controller(SaldoController::class)->group(function () {
            Route::prefix('saldo')->group(function () {
                Route::get('/', 'index')->name('admin.saldo');
                Route::get('/history/{userSaldoId}', 'history')->name('admin.saldo.history');
                Route::post('/update', 'update')->name('admin.saldo.update');
            });
        });

        Route::controller(UserManagementController::class)->group(function () {
            Route::prefix('user')->group(function () {
                Route::get('/', 'index')->name('admin.user');
                Route::post('/mitra', 'makeMitra')->name('admin.user.makeMitra');
                Route::post('', 'store')->name('admin.user.store');
                Route::get('/edit/{user}', 'edit')->name('admin.user.edit');
                Route::post('/update/{user}', 'update')->name('admin.user.update');
                Route::get('/delete/{user}', 'destroy')->name('admin.user.delete');
            });
        });

        Route::prefix('management')->group(function () {
            Route::prefix('flight')->group(function () {
                Route::controller(FlightManagementController::class)->group(function () {
                    Route::get('/', 'index')->name('admin.management.flight.index');
                    Route::post('/approve', 'approve')->name('admin.management.flight.approve');
                    Route::post('/store', 'store')->name('admin.management.flight.store');
                    Route::get('/edit', 'edit')->name('admin.management.flight.edit');
                    Route::get('/delete', 'delete')->name('admin.management.flight.delete');
                });
            });
        });

        Route::prefix('management')->group(function () {
            Route::prefix('hotel')->group(function () {
                Route::controller(HotelManagementController::class)->group(function () {
                    Route::get('/', 'index')->name('admin.management.hotel.index');
                    Route::post('/store', 'store')->name('admin.management.hotel.store');
                    Route::get('/edit', 'edit')->name('admin.management.hotel.edit');
                    Route::get('/delete', 'delete')->name('admin.management.hotel.delete');
                });
            });
        });
    });
});
