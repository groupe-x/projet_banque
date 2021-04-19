<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('homesite/index');
});

Route::get("/register", [AuthController::class,'register'])->name('register.index');
Route::post("enregistre",[AuthController::class,'store'])->name('register.store');
Route::get('/login',[AuthController::class,'index'])->name('login.index');
Route::post("/login-verif",[AuthController::class,'login'])->name('login.login');
