<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'homepage'] );

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ADMIN/ADD POST

Route::get('/post_page',[PostController::class,'post_page'] );
Route::post('/add_post',[PostController::class,'add_post'] );
Route::get('/show_post',[PostController::class,'show_post'] );
Route::get('/delete_post/{id}',[PostController::class,'delete_post'] );
Route::get('/edit_post/{id}',[PostController::class,'edit_post'] );
Route::post('/update_post/{id}',[PostController::class,'update_post'] );
Route::get('/accept_post/{id}',[PostController::class,'accept_post'] );
Route::get('/reject_post/{id}',[PostController::class,'reject_post'] );

// User
Route::get('/post_details/{id}',[HomeController::class,'post_details'] );
Route::get('/create_post',[HomeController::class,'create_post'] )->middleware('auth');
Route::post('/user_post',[HomeController::class,'user_post'] )->middleware('auth');
Route::get('/my_post',[HomeController::class,'my_post'] )->middleware('auth');
Route::get('/my_post_delete/{id}',[HomeController::class,'my_post_delete'] )->middleware('auth');
Route::get('/my_post_update/{id}',[HomeController::class,'my_post_update'] )->middleware('auth');
Route::post('/update_post_data/{id}',[HomeController::class,'update_post_data'] )->middleware('auth');
