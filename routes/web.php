<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('calender', [PagesController::class, 'calender'])->name('calender');

Route::get('dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

Route::get('team', [PagesController::class, 'team'])->name('team');

Route::get('project', [PagesController::class, 'project'])->name('project');

Route::get('welcome', [PagesController::class, 'welcome'])->name('welcome');

// Route::get('login', [PagesController::class, 'login'])->name('login');
