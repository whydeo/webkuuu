<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\wkelasController;
use App\Exports\nilaiExport;
use App\Http\Controllers\adminController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\kelasController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['admin'])->group(function () {
    Route::get('admin', [AdminController::class, 'admin']);
});
Route::middleware(['guru'])->group(function () {
    Route::get('guru', [nilaiController::class, 'index']);
});
Route::middleware(['walikelas'])->group(function () {
    Route::get('guru', [wkelasController::class, 'wkelas']);
});
Route::get('/logout', function() {
    Auth::logout();
    redirect('/');
});
Route::resource('admin/siswa', siswaController::class);
Route::resource('nilai/nilai', nilaiController::class);
Route::get('wkelas/wkelas', [App\Http\Controllers\wkelasController::class, 'wkelas'])->name('wkelas');
Route::get('nilai/export/', [nilaiController::class, 'export'])->name('export');
Route::resource('admin', adminController::class);
Route::resource('guru', guruController::class);
Route::resource('kelas', kelasController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
