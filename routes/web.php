<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nvk-session-get',[Sessioncontroller::class,'nvkGetSession'])->name('session.get');
Route::get('/nvk-session-store',[Sessioncontroller::class,'nvkstoreSessionData'])->name('session.store');
Route::get('/nvk-session-delete',[Sessioncontroller::class,'nvkdeleteSession'])->name('session.delete');

Route::get('/nvk-login',[LoginController::class,'nvklogin'])->name('session.login');
Route::get('/nvk-logout',[LoginController::class,'nvklogin'])->name('session.login');
Route::post('/nvk-login',[LoginController::class,'nvkloginSubmit'])->name('session.submit');
