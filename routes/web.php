<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Auth;
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
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
Route::get('/kategori', CategoryController::class)->name('category');


// Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     });

    // Route::get('/dashboard', 'Admin/DashboardController@index')->name('dashboard');

    ////ADMIN

////STUDENT
// Route::prefix('student')
// ->middleware(['auth', 'student'])
// ->group(function() {
//     Route::get('/', [App\Http\Controllers\Student\DashboardController::class, 'index'])->name('dashboard');

// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
