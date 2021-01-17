<?php

use App\Http\Controllers\API\MakananResource;
use App\Http\Controllers\API\AlamatResource;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|----------------------------- ---------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::resource('makanan', MakananResource::class);

Route::get('provinsi/{id}', [AlamatResource::class, 'getIbukota']);
Route::get('ibukota/{id}', [AlamatResource::class, 'getKelurahan']);
Route::get('kecamatan/{id}', [AlamatResource::class, 'getKecamatan']);




