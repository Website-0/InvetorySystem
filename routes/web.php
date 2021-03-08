<?php

use App\Http\Controllers\BorrowedController;
use App\Http\Controllers\EquipmentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('invoice', function () {
    return view('invoices::templates.default');
});

Route::resource('/equipment', EquipmentsController::class);

Route::resource('/borrowed', BorrowedController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
