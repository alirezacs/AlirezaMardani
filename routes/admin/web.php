<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\CommentController;

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

Route::get('/', [DashboardController::class, 'index']);

/* User Routes */
Route::resource('user', UserController::class)->except(['create', 'store', 'show', 'delete']);
Route::get('user/avatar/{hash}', [UserController::class, 'getAvatar'])->name('user.getAvatar');
/* User Routes */

/* Skill Routes */
Route::resource('skill', SkillController::class)->except(['show']);
/* Skill Routes */

/* Portfolio Routes */
Route::resource('portfolio', PortfolioController::class)->except(['show']);
Route::get('portfolio/image/{hash}', [PortfolioController::class, 'getImag'])->name('portfolio.getImage');
/* Portfolio Routes */

/* Experience Routes */
Route::resource('experience', ExperienceController::class)->except(['show']);
/* Experience Routes */

/* Comment Routes */
Route::resource('comment', CommentController::class);
Route::get('comment/avatar/{hash}', [CommentController::class, 'getAvatar'])->name('comment.getAvatar');
/* Comment Routes */
