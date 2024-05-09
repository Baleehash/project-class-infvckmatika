<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\DashboardHomeController;
use App\Http\Controllers\DashboardMembersController;
use App\Http\Controllers\DashboardProjectsController;
use App\Http\Controllers\DashboardGalleriesController;

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



Route::get('/', [HomeController::class, 'index']);

// ProjectsController akan menjalankan kelas index yang di kirim ke halaman /projects
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/members', [MembersController::class, 'index']);
Route::get('/gallery', [GalleriesController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/home',DashboardHomeController::class)->middleware('auth');
Route::resource('/dashboard/members',DashboardMembersController::class)->middleware('auth');
Route::resource('/dashboard/projects',DashboardProjectsController::class)->middleware('auth');
Route::resource('/dashboard/galleries',DashboardGalleriesController::class)->middleware('auth');

