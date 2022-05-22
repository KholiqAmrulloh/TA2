<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DBIController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\KmedoidsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiKController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SilhouetteController;

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
// halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//halaman register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//halaman home
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

// halaman import data
Route::get('/importData', [ImportController::class, 'index'])->middleware('auth');
Route::post('/hasilImport', [ImportController::class, 'import'])->middleware('auth');
Route::get('/importData/Delete', [ImportController::class, 'delete'])->middleware('auth');

//halaman nilai K
Route::get('/nilaiK', [NilaiKController::class, 'index'])->middleware('auth');
// Route::post('/nilaiK', [NilaiKController::class, 'tentukan'])->middleware('auth');
Route::get('/nilaiK/reset', [NilaiKController::class, 'reset'])->middleware('auth');

//halaman k-medoids
Route::get('/kmedoidsClustering', [KmedoidsController::class, 'index'])->middleware('auth');
Route::post('/nilaiK', [KmedoidsController::class, 'tentukan'])->middleware('auth');

//halaman DBI
Route::get('/davies-bouldinindex', [DBIController::class, 'index'])->middleware('auth');

//halaman Silhouette
Route::get('/silhouette', [SilhouetteController::class, 'index'])->middleware('auth');
