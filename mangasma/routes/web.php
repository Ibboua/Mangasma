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
    return view('catalogue');
});

Route::get('/register.php', function () {
    return view('register');
});

Route::post('/register.php', [AuthController::class, "register"])->name('register');

Route::get('/login.php', function () {
    return view('login');
});

Route::post('/login.php', [AuthController::class, "login"])->name('login');

Route::get('logout', [AuthController::class, "logout"])->name('logout');

Route::get('/reset.php', function () {
    return view('reset');
});

Route::get('/catalogue.php', function () {
    return view('catalogue');
});

Route::get('/produit.php', function () {
    return view('produit');
});

Route::get('/panier.php', function () {
    return view('panier');
});

Route::get('/admin.php', function () {
    return view('admin');
});
