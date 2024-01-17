<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminPanelController;

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


Route::get("/", [HomeController::class,"index"])->name("home");

Route::resource('register', RegisterController::class);
Route::resource('login', LoginController::class);
Route::resource('home', HomeController::class);
Route::resource('member', MemberController::class);

Route::get('/admin-panel', [AdminPanelController::class, 'index'])->name('admin.panel');
Route::post('/adminlogout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::resource('adminregister', AdminRegisterController::class);
Route::resource('adminlogin', AdminLoginController::class);

Route::get('/members', [AdminPanelController::class, 'index'])->name('admin.members.index');
    Route::get('/members/{id}/edit', [AdminPanelController::class, 'edit'])->name('admin.members.edit');
    Route::put('/members/{id}', [AdminPanelController::class, 'update'])->name('admin.members.update');
    Route::delete('/members/{id}', [AdminPanelController::class, 'destroy'])->name('admin.members.destroy');
