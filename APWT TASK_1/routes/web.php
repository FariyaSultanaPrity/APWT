<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\ProductController;



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

Route::get('/home', [PagesController::class, 'index'])->name('home');

Route::get('/product', [ProductController::class, 'service'])->name('product');
Route::get('/teams', [TeamsController::class, 'teams'])->name('teams');
Route::get('/aboutUs', [AboutUsController::class, 'aboutUsView'])->name('aboutUs');
Route::get('/contactUs', [ContactController::class, 'contactUs'])->name('contact');
