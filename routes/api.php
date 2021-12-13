<?php
use App\Http\Controllers\LokasiController;
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
Route::get('/lokasi',[LokasiController::class, 'index']);
Route::get('/lokasi/{lokasi}',[LokasiController::class, 'show']);
Route::get('/lokasi/search/{nama_lokasi}',[LokasiController::class, 'search']);

Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::post('/lokasi',[LokasiController::class, 'store']);
    Route::put('/lokasi/{lokasi}',[LokasiController::class, 'update']);
    Route::delete('/lokasi/{lokasi}',[LokasiController::class, 'destroy']);
    Route::post('/logout', [UserController::class, 'logout']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
