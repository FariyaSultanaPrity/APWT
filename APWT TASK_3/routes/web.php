<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\ValidUser;
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
Route::get('/dash',[UserController::class, 'dash'])->name('dash')->middleware('ValidUser');
Route::post('/login',[LoginController::class, 'login'])->name('login');

Route::get('/productCreate',[ProductController::class, 'productCreate'])->name('productCreate')->middleware('ValidUser');

Route::post('/productCreate',[ProductController::class, 'productCreateSubmit'])->name('productCreate')->middleware('ValidUser');

Route::get('/sellerProductList',[ProductController::class, 'sellerProductList'])->name('sellerProductList')->middleware('ValidUser');

Route::get('/productDelete',[ProductController::class, 'productDelete'])->name('productDelete')->middleware('ValidUser');

Route::get('/productCatagory',[ProductController::class, 'productCatagory'])->name('productCatagory')->middleware('ValidUser');

Route::get('/productRegDetails',[ProductController::class, 'productRegDetails'])->name('productRegDetails')->middleware('ValidUser');

Route::get('/productCatagoryEdit',[ProductController::class, 'productCatagoryEdit'])->name('productCatagoryEdit')->middleware('ValidUser');

Route::post('/productCatagoryEdit',[ProductController::class, 'productCatagoryEditSubmitted'])->name('productCatagoryEdit')->middleware('ValidUser');