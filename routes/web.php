<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OgrenciController;
use App\Http\Controllers\OgretmenController;
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
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name("anasayfa");

    Route::get('/ogrenci', [OgrenciController::class, 'index'])->name("ogrenci");
    Route::get('/ogretmen', [OgretmenController::class, 'index'])->name("ogretmen");
});

Route::get("/login", [LoginController::class, "index"])->name("login");
Route::post("/login", [LoginController::class, "login"])->name("login-post");
Route::post('/oneriAl', [OgrenciController::class, 'oneriAl'])->name("oneriAl");

Route::get('/cikis', [LoginController::class, 'destroy'])->name('logout');
