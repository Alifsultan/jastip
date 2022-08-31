<?php

use App\Http\Controllers\staffController;
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

// Route::get('staff', function () { return view('/page/staff'); })->middleware('checkRole:staff');
Route::get('kurir', function () { return view('/page/kurir'); })->middleware(['checkRole:kurir,staff']);
Route::get('ups', [UserController::class, 'ups'])->name('ups');
Route::get('index', [staffController::class, 'index'])->name('index');
Route::get('kurir', [staffController::class, 'kurir'])->name('kurir');
Route::get('create', [staffController::class, 'create'])->name('create');
Route::get('kirim', [staffController::class, 'kirim'])->name('kirim');
Route::post('store', [staffController::class, 'store'])->name('store');
Route::post('edit', [staffController::class, 'edit'])->name('edit');
Route::post('update', [staffController::class, 'update'])->name('update');
Route::post('destroy', [staffController::class, 'destroy'])->name('destroy');
Route::delete('{id}/destroyer', [staffController::class, 'destroyer'])->name('destroyer');
Route::group(['middleware'=>'checkRole:staff'], function(){
    Route::get('staff', function () { 
        return view('/page/staff');
    });
    Route::resource('staff',staffController::class)->names([
        'index'=>'index',
        'create'=>'create',
        'store'=>'store',
        'edit'=>'edit',
        'update'=>'update',
        'destroy'=>'destroy',
    ]);
    Route::resource('/staff', \App\Http\Controllers\staffController::class);
    // Route::post('destroyer', [staffController::class, 'destroyer'])->name('destroyer');
});

// Route::group(['middleware'=>'checkRole:kurir,staff'], function(){
//     Route::get('kurir', function () { 
//         return view('/page/kurir');
//     });
//     Route::resource('staff',staffController::class)->names([
//         'destroyer'=>'destroyer',
//     ]);
//     Route::resource('/staff', \App\Http\Controllers\staffController::class);
// });
// Route::get('index', [kurirController::class, 'index'])->name('index');
// Route::post('edit', [kurirController::class, 'edit'])->name('edit');
// Route::post('update', [kurirController::class, 'update'])->name('update');