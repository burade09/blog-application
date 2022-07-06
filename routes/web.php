<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
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
Route::group(['middleware' => 'auth'], function () {
    Route::get('blog/form',[BlogController::class,'form'])->name('blog.form');
    Route::post('blog/store',[BlogController::class,'store'])->name('blog.store');
    Route::get('blog/table',[BlogController::class,'table'])->name('blog.table');
Route::get('blog.edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::post('blog.update/{id}',[BlogController::class,'update'])->name('blog.update');
Route::get('blog.delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::view('category.create','category.create')->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category.index',[CategoryController::class,'index'])->name('category.index');
Route::get('category.edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category.update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category.delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

});
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',[WelcomeController::class,'index'])->name('welcome');

Route::get('show/{id}',[BlogController::class,'show'])->name('blog.show');
