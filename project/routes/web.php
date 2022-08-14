<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
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

// Route::get('/', function () {
//     return view('home');
// });

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Auth::routes();
Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::post('logout', [UserController::class, 'logout'])->name('logout');
// Route::get('logout', 'UserController@logout');
// Route::get('staff-page', function() {
//     return 'Halaman untuk Staff';
// })->middleware('role:staff')->name('staff');
Route::get('staff', function () { return view('/page/staff'); })->middleware('checkRole:staff');
Route::get('kurir', function () { return view('/page/kurir'); })->middleware(['checkRole:kurir,staff']);
Route::get('customer', function () { return view('/page/customer'); })->middleware(['checkRole:customer,staff']);
Route::get('ups', [UserController::class, 'ups'])->name('ups');
// Route::get('kurir-page', function() {
//     return 'Halaman untuk Kurir';
// })->middleware('role:kurir')->name('kurir');

// Route::get('customer-page', function() {
//     return 'Halaman untuk Customer';
// })->middleware('role:customer')->name('customer');