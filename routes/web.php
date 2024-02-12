<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ActivityController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ActivityController::class)->middleware(['auth'])->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::get('/lists/{activity}','show')->name('show');
        Route::post('/lists','todostore')->name('todostore');
        Route::get('/lists/{activity}/edit','edit')->name('edit');
        Route::put('/lists/{activity}','update')->name('update');
        Route::delete('/lists/{activity}','delete')->name('delete');
});

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
        Route::get('/listed','index')->name('achieve.index');
        Route::get('/listed/mypost','mypost')->name('achieve.mypost');
        Route::get('/listed/{activity}','create')->name('achieve.create');
        Route::get('/listed/show/{post}','show')->name('achieve.show');
        Route::post('/listed','store')->name('achieve.store');

});

Route::get('/categories/{category}',[CategoryController::class,'index'])->middleware("auth");


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
