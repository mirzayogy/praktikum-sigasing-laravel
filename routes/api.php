<?php
use App\Http\Controllers\LokasiController;
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

Route::get('/lokasi',[LokasiController::class, 'index']);
Route::post('/lokasi',[LokasiController::class, 'store']);
Route::get('/lokasi/{lokasi}',[LokasiController::class, 'show']);
Route::put('/lokasi/{lokasi}',[LokasiController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
