<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KocakController;

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
    return view('admin/index');
});


Route::get('/menu',[MenuController::class, 'index'])->name('user.menu');
Route::post('/cart',[MenuController::class, 'cart'])->name('user.menu.cart');
Route::get('/checkout',[MenuController::class, 'checkout'])->name('user.checkout');


Route::post('delete',[MenuController::class, 'cartdelete'])->name('cartdelete');
Route::post('cartupdate',[MenuController::class, 'cartupdate'])->name('cartupdate');
Route::post('deleteallcart',[MenuController::class, 'deleteallcart'])->name('deleteallcart');
Route::post('tambahPesanan',[MenuController::class, 'tambahPesanan'])->name('tambahPesanan');
Route::post('kurangPesanan',[MenuController::class, 'kurangPesanan'])->name('kurangPesanan');




Route::get('/user',[MenuController::class, 'index'])->name('admin.index');
Route::get('/contacts',[KocakController::class, 'index'])->name('admin.contact');
Route::post('/add',[KocakController::class, 'add'])->name('user.contact.add');
Route::get('/contact',[KocakController::class, 'index'])->name('user.contact');
Route::get('/hapus/{id}',[KocakController::class, 'hapus'])->name('contact.hapus');

Route::get('/home', function () {
    return view('user/home');
});
Route::get('/about', function () {
    return view('user/about');
});
Route::get('/service', function () {
    return view('user/service');
});
Route::get('/contact', function () {
    return view('user/contact');
});