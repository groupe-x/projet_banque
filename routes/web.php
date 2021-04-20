<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

/*Route::get('/', function () {
    return view('homesite/index');
});*/

Route::get('/', [HomeController::class,'index'])->name('accueil');
Route::get("/register", [AuthController::class,'register'])->name('register.index');
Route::post("enregistre",[AuthController::class,'store'])->name('register.store');
Route::get('login',[AuthController::class,'index'])->name('login');
Route::post("/login-verif",[AuthController::class,'login'])->name('login.login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
Route::get('/mon-espace', [HomeController::class,'home'])->name('home');
Route::get('virement',  [HomeController::class,'virement'])->name('pages.virement');
Route::get('compte', [HomeController::class,'compte'])->name('pages.compte');
});
