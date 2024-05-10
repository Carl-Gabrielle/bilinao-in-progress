<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\decorationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SellerMiddleware;



Route::get('/', function () {
    return view('dashboard.user_dashboard');
});

Route::get('/login', [UserController::class, 'login'])->name('users.login')->middleware('guest');
Route::get('/signup', [AuthController::class, 'signup'])->name('users.signup');
Route::get('/forgot', [UserController::class, 'forgotPassword'])->name('users.forgot_password');
// ->middleware('auth')
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard.user_dashboard');
Route::get('/admin', [UserController::class, 'admin'])->name('dashboard.admin');
Route::get('/details', [UserController::class, 'details'])->name('productDetails.details');
Route::get('/seller', [UserController::class, 'seller'])
    ->name('dashboard.seller')
    ->middleware(SellerMiddleware::class);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/signup', [AuthController::class, 'store']);
Route::get('/homeDecor', [decorationController::class, 'homeDecor'])->name('decorations.home_decor');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('/uploadproduct', [decorationController::class, 'uploadproduct']);

Route::get('/product/{id}', [decorationController::class, 'showProductDetails'])->name('product.details');
Route::post('/addcart/{id}', [DecorationController::class, 'addcart'])->name('addcart');
// Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');
// Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
// Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
// Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
// Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::get('/search', [DecorationController::class, 'search'])->name('search');
