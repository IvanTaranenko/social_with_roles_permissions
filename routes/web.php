<?php

use App\Http\Controllers\AdminPanel\TaskController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/admin-panel', [\App\Http\Controllers\HomeController::class,'admin']);

    Route::resource('tasks', TaskController::class);

    Route::resource('roles', RoleController::class);
    Route::resource('users', UsersController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('auth/social', [\App\Http\Controllers\Auth\LoginController::class,'show'])->name('social.login');
Route::get('oauth/{driver}', [\App\Http\Controllers\Auth\LoginController::class,'redirectToProvider'])->name('social.oauth');
Route::get('oauth/{driver}/callback',[ \App\Http\Controllers\Auth\LoginController::class,'handleProviderCallback'])->name('social.callback');


