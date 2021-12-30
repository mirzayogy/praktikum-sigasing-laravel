<?php

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [UserController::class, 'register']);
Route::post('/loginuser', [UserController::class, 'login']);
Route::post('/login', [PenggunaController::class, 'login']);

Route::get('/lokasi',[LokasiController::class, 'index']);
Route::get('/lokasi/count',[LokasiController::class, 'count']);
Route::get('/lokasi/count/{nama_lokasi}',[LokasiController::class, 'countWhere']);
Route::get('/lokasi/{lokasi}',[LokasiController::class, 'show']);
Route::get('/lokasi/search/{nama_lokasi}',[LokasiController::class, 'search']);

Route::get('/jabatan', [JabatanController::class, 'index']);
Route::get('/jabatan/count', [JabatanController::class, 'count']);
Route::get('/jabatan/count/{nama_jabatan}', [JabatanController::class, 'countWhere']);
Route::get('/jabatan/{jabatan}', [JabatanController::class, 'show']);
Route::get('/jabatan/search/{nama_jabatan}', [JabatanController::class, 'search']);
Route::get('/jabatan/search_more/{gapok_jabatan}', [JabatanController::class, 'searchMore']);

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/{karyawan}', [KaryawanController::class, 'show']);
Route::get('/karyawan/search/{keywords}', [KaryawanController::class, 'search']);


Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::post('/logout', [PenggunaController::class, 'logout']);

    Route::post('/lokasi',[LokasiController::class, 'store']);
    Route::put('/lokasi/{lokasi}',[LokasiController::class, 'update']);
    Route::delete('/lokasi/{lokasi}',[LokasiController::class, 'destroy']);

    Route::post('/jabatan', [JabatanController::class, 'store']);
    Route::put('/jabatan/{jabatan}', [JabatanController::class, 'update']);
    Route::delete('/jabatan/{jabatan}', [JabatanController::class, 'destroy']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
