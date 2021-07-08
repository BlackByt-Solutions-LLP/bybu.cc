<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LayoutController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function(){
    Route::get('setting', [PagesController::class, 'setting'])->name('setting');

    Route::get('dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    
    Route::resource('links', LinkController::class);

    Route::get('appearance', [PagesController::class, 'allLayout'])->name('allLayout');
    Route::put('appearance', [PagesController::class, 'updateLayout'])->name('updateLayout');

    Route::put('update', [UserController::class, 'updateAccount'])->name('updateAccount');
    Route::put('avatar', [UserController::class, 'updateAvatar'])->name('updateAvatar');
});

Route::get('/{slug}', [PagesController::class, 'profile'])->name('profile');

Route::get('welcome', [PagesController::class, 'welcome'])->name('welcome');

Route::resource('layouts', LayoutController::class);

Route::get('admin/dashboard', [PagesController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('admin/test', [PagesController::class, 'adminTesting'])->name('adminTesting');