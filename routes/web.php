<?php

use App\Mail\sendmail;
use App\Models\Client;
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
Route::get("/register", [AuthController::class,'register'])->name('register');
Route::post("enregistre",[AuthController::class,'store'])->name('register.store');
Route::get('login',[AuthController::class,'index'])->name('login');
Route::post("/login-verif",[AuthController::class,'login'])->name('login.login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('validation/{id}', function ($id) {
    $client=Client::find($id);
    if($client->is_ok==1) return "<br><br><center><h1>ce compte client a deja été valider!</h1></center>";

    \DB::table('client')->where('id',$id)->update(['is_ok'=>1]);
      Mail::to($client->email)->send(new sendmail("mail.bienvenue_client",$client->id));

    return "<br><br><center><h1>le compte client a bien été valider<br>il recevra un mail sous peu !</h1></center>";

});

Route::group(['middleware' => 'auth'], function () {
Route::get('/mon-espace', [HomeController::class,'home'])->name('home');
Route::get('virement',  [HomeController::class,'virement'])->name('pages.virement');
Route::get('compte', [HomeController::class,'compte'])->name('pages.compte');
Route::get('virement', [HomeController::class,'virement'])->name('pages.virement');
Route::post('add-virement', [HomeController::class,'add_virement'])->name('add_virement');


});
