<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});


Route::get('/registration',[UserController::class, 'registration'])->name('registration');
Route::post('/registration',[UserController::class, 'registrationSubmitted'])->name('registration');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/dash',[UserController::class, 'dash'])->name('dash');
Route::post('/login',[LoginController::class, 'login'])->name('login');