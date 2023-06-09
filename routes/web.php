<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HotelController as HotelController;
use App\Http\Controllers\Admin\HotelController as AdminHotelController;
use App\Http\Controllers\HomeController;
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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:admin'
])
->prefix('admin')
->name('admin.')
->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
        
    Route::resource('/events', AdminHotelController::class);

        Route::get('/category', function () {
            return view('admin.category.index');
        })->name('category.index');

        Route::get('/reservations', function () {
            return view('admin.reservations.index');
        })->name('reservations.index');

        Route::get('/users', function () {
            return view('admin.users.index');
        })->name('users.index');
    });

Route::get('event/{id}', function ($id) {

    debug(auth()->user());

    //dd(\App\Enums\UserRole::User);

    //dd(auth()->user());

    return view('event.show',[
        'event' => $id
    ]);
})

-> name('event.show');

Route::get('reserve/{id}', function ($id) {
    return view('event.reservation',[
        'reserve' => $id
    ]);
})->name('event.reservation');

Route::get('/', HomeController::class)->name('home');