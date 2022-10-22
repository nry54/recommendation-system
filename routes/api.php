<?php

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
Route::post("/giris", [ApiController::class, "giris"]);

Route::middleware('auth:api')->get('/kullanicilar', function (Request $request) {
    return $request->Kullanicilar();
});
