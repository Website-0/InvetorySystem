<?php

use App\Http\Controllers\BorrowedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipmentsController;
use App\Http\Controllers\PDFController;
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
    return redirect('/login');
});

Route::resource('/equipment', EquipmentsController::class);

Route::resource('/borrowed', BorrowedController::class);

Route::get('/PDF', [PDFController::class, 'PDF']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
