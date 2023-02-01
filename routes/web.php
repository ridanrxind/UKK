<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\dasboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/users', function () {
    return view('users.index');
})->name('users.home');
Route::get('/user/{id}', [UserController::class, 'show'])->name('users.show');
// Route::get('/dasboard',[dasboardController::class, 'index']);

// Route::get('/login', function () {
//     return view('pengguna.login');
// });


// Route::post('/postlogin', [loginController::class, 'postlogin'])->name('postlogin');
