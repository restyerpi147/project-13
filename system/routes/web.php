<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\ClientMakananController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingController;


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

Route::get('/base', function () {
    return view('template.base');
});




// Halaman Admin
Route::get('admin/dashboard', [HomeController::class, 'showBeranda']);
Route::get('dashboard/{status}', [HomeController::class, 'showBeranda']);
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);
Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);

// Halaman Admin 
Route::prefix('admin')->middleware('auth')->group(function(){
Route::post('makanan/filter', [MakananController::class, 'filter'])->middleware('auth');
Route::resource('makanan', MakananController::class);
Route::resource('product', ProductController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('user', UserController::class);

});

// Halaman Client
Route::get('/', [ClientMakananController::class, 'index']);
Route::post('/filter', [ClientMakananController::class, 'filter']);
Route::get('pesanan/{makanan}', [ClientMakananController::class, 'create']);
Route::post('pesanan', [ClientMakananController::class, 'store']);
Route::get('bayar', [ClientMakananController::class, 'show']);
Route::get('bayar/{makanan}/edit', [ClientMakananController::class, 'edit']);
Route::put('bayar/{makanan}', [ClientMakananController::class, 'update']);
Route::delete('bayar/{makanan}', [ClientMakananController::class, 'destroy']);


// Login section
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'prosesLogin']);
Route::get('logout', [AuthController::class, 'logout']);


Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);

// // Halaman Kategori
// Route::get('admin/kategori', [KategoriController::class, 'index']);
// Route::get('admin/kategori/create', [KategoriController::class, 'create']);
// Route::post('admin/kategori', [KategoriController::class, 'store']);
// Route::get('admin/kategori/{kategori}', [KategoriController::class, 'show']);
// Route::get('admin/kategori/{kategori}/edit', [KategoriController::class, 'edit']);
// Route::put('admin/kategori/{kategori}', [KategoriController::class, 'update']);
// Route::delete('admin/kategori/{kategori}', [KategoriController::class, 'destroy']);

// // Halaman Makanan
// Route::get('admin/makanan', [MakananController::class, 'index']);
// Route::get('admin/makanan/create', [MakananController::class, 'create']);
// Route::post('admin/makanan', [MakananController::class, 'store']);
// Route::get('admin/makanan/{makanan}', [MakananController::class, 'show']);
// Route::get('admin/makanan/{makanan}/edit', [MakananController::class, 'edit']);
// Route::put('admin/makanan/{makanan}', [MakananController::class, 'update']);
// Route::delete('admin/makanan/{makanan}', [MakananController::class, 'destroy']);



// // Halaman User
// Route::get('admin/user', [UserController::class, 'index']);
// Route::get('admin/user/create', [UserController::class, 'create']);
// Route::post('admin/user', [UserController::class, 'store']);
// Route::get('admin/user/{user}', [UserController::class, 'show']);
// Route::get('admin/user/{user}/edit', [UserController::class, 'edit']);
// Route::put('admin/user/{user}', [UserController::class, 'update']);
// Route::delete('admin/user/{user}', [UserController::class, 'destroy']);


Route::get('test-ajax', [HomeController::class, 'testAjax']);
