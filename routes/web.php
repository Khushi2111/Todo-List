<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth::routes();

// Route::middleware('auth')->group(function () {
// Route::get('/demo',[App\Http\Controllers\TodoListController::class, 'index'])->name('demo');
// });

Route::get('/dashboard', 'App\Http\Controllers\TodoListController@index')->name('dashboard');

Route::get('create', 'App\Http\Controllers\TodoListController@create');

Route::get('save_new_list', 'App\Http\Controllers\TodoListController@store');

Route::get('delete/{id}', 'App\Http\Controllers\TodoListController@destroy');
Route::get('edit/{id}', 'App\Http\Controllers\TodoListController@edit');
Route::get('update_list/{id}', 'App\Http\Controllers\TodoListController@update');
Route::get('share/{id}', 'App\Http\Controllers\TodoListController@share');


require __DIR__.'/auth.php';
