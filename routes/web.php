<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

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
    return view('welcome');
});


Route::get('/deals', function () {
    return view('deals');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/Phonetype', [PhoneController::class,'PhoneType']);

// Route::get('/phone', function () {
//     return view('phones');
// });

// Route::get('/checkout', [PhoneController::class,'checkout'])->name('checkout');
Route::get('/checkout/{id}', [PhoneController::class,'checkout'])->name('checkout');

Route::post('/invoic',[PhoneController::class,'invoic'])->name('invoic');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
