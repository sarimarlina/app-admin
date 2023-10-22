<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterPegawaiController;
use App\Http\Controllers\MasterTabelController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
use App\Models\Gaji;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('index');

Route::resource('/masterTabel', MasterTabelController::class);
Route::get('/statusAbsen', [MasterTabelController::class, 'statusAbsen']);
Route::get('/tambahWaktuKerja', [MasterTabelController::class, 'tambahWaktuKerja']);
Route::post('/insertWaktuKerja', [MasterTabelController::class, 'insertWaktuKerja']);

Route::get('/masterPegawai', [MasterPegawaiController::class, 'index']);
Route::get('/tambahPegawai', [MasterPegawaiController::class, 'create']);
Route::post('/storePegawai', [MasterPegawaiController::class, 'store']);

Route::get('/laporangaji', [GajiController::class, 'index']);
Route::get('/tambahGaji', [GajiController::class, 'create']);
Route::post('/storeGaji', [GajiController::class, 'store']);

Route::get('/profile', [UserController::class, 'index']);
