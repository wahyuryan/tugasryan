<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginController;

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

Route::middleware('guest')->group(function(){
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    Route::get('/', function () {return view('home'); });
    Route::get('/about', function () {return view('about'); });
    Route::get('/project', function () {return view('project'); });
    Route::get('/kontak', function () {return view('kontak'); });
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/Pro', function () {
    return view('Portofolio');
});

// Admin
Route::middleware('auth')->group(function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::get('mastersiswa/{id_siswa}/hapus', [SiswaController::class, 'hapus'])->name('mastersiswa.hapus');
    Route::get('masterproject/tambah/{id}', [ProjectController::class, 'tambah'])->name('masterproject.tambah');
    Route::post('masterproject/tambah/{id}', [ProjectController::class, 'store'])->name('masterproject.store');
    Route::resource('/masterproject', ProjectController::class);
    Route::resource('/masterkontak', KontakController::class);
    Route::resource('/mastersiswa', SiswaController::class);
    Route::post('logout', [LoginController::class, 'logout']);
});
