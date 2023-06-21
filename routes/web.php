<?php

use App\Http\Controllers\AnalisaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\masterData\AturanController;
use App\Http\Controllers\masterData\GejalaController;
use App\Http\Controllers\masterData\PenyakitController;
use App\Http\Controllers\PengaturanAkunController;
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
    return view('landingPage.pages.index');
});

Route::get('tentang', function () {
    return view('landingPage.pages.tentang');
});

Route::get('/analisa', [AnalisaController::class, 'index']);
Route::post('/hasil-analisa', [AnalisaController::class, 'hasilAnalisa']);
Route::post('/detail-penyakit', [AnalisaController::class, 'detailPenyakit']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/cekLogin', [AuthController::class, 'cekLogin']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/master-data/gejala', GejalaController::class);
    Route::resource('/master-data/penyakit', PenyakitController::class);
    Route::resource('/master-data/aturan', AturanController::class);

    Route::get('/list/penyakit', [ListController::class, 'penyakit']);
    Route::get('/list/gejala', [ListController::class, 'gejala']);

    Route::get('pengaturan-akun', [PengaturanAkunController::class, 'index']);
    Route::put('pengaturan-akun', [PengaturanAkunController::class, 'update']);
});
