<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\ReportController;

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


// Route::get('/', []);
Route::get('/', [DashboardController::class, 'index']);

// Route::get('/residents', [ResidentController::class, 'index']);
// Route::get('/residents/create', [ResidentController::class, 'create']);
Route::resource('residents', ResidentController::class)->middleware('auth');
Route::resource('reports', ReportController::class)->middleware('auth');

Route::resource('officials', ReportController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

