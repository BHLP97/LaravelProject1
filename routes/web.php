<?php
use App\Http\Controllers\WebController; 
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\SEOController;
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

Route::get('/', [WebController::class, 'index'])->name('frontend.welcome');
Route::get('/book/{id}', [WebController::class, 'details'])->name('frontend.content.product');
Route::get('/filter/category/{id}', [WebController::class, 'filterCategory'])->name('frontend.filter.book.category');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('admin.menu');
        Route::get('/create', [MenuController::class, 'create'])->name('admin.menu.create');
        Route::post('/store', [MenuController::class, 'store'])->name('admin.menu.store');
        Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('admin.menu.edit');
        Route::post('/update/{id}', [MenuController::class, 'update'])->name('admin.menu.update');
        Route::get('/destroy/{id}', [MenuController::class, 'destroy'])->name('admin.menu.destroy');
    });
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });
    Route::prefix('book')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('admin.book');
        Route::get('/create', [BookController::class, 'create'])->name('admin.book.create');
        Route::post('/store', [BookController::class, 'store'])->name('admin.book.store');
        Route::get('/edit/{id}', [BookController::class, 'edit'])->name('admin.book.edit');
        Route::post('/update/{id}', [BookController::class, 'update'])->name('admin.book.update');
        Route::get('/destroy/{id}', [BookController::class, 'destroy'])->name('admin.book.destroy');
    });
    Route::prefix('review')->group(function () {
        Route::get('/', [ReviewController::class, 'index'])->name('admin.review');
        Route::get('/create', [ReviewController::class, 'create'])->name('admin.review.create');
        Route::post('/store', [ReviewController::class, 'store'])->name('admin.review.store');
        Route::get('/edit/{id}', [ReviewController::class, 'edit'])->name('admin.review.edit');
        Route::post('/update/{id}', [ReviewController::class, 'update'])->name('admin.review.update');
        Route::get('/destroy/{id}', [ReviewController::class, 'destroy'])->name('admin.review.destroy');
    });
    Route::prefix('comment')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('admin.comment');
        Route::get('/create', [CommentController::class, 'create'])->name('admin.comment.create');
        Route::post('/store', [CommentController::class, 'store'])->name('admin.comment.store');
        Route::get('/edit/{id}', [CommentController::class, 'edit'])->name('admin.comment.edit');
        Route::post('/update/{id}', [CommentController::class, 'update'])->name('admin.comment.update');
        Route::get('/destroy/{id}', [CommentController::class, 'destroy'])->name('admin.comment.destroy');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    });
    Route::prefix('config')->group(function () {
        Route::get('/', [ConfigController::class, 'index'])->name('admin.config');
        Route::get('/create', [ConfigController::class, 'create'])->name('admin.config.create');
        Route::post('/store', [ConfigController::class, 'store'])->name('admin.config.store');
        Route::get('/edit/{id}', [ConfigController::class, 'edit'])->name('admin.config.edit');
        Route::post('/update/{id}', [ConfigController::class, 'update'])->name('admin.config.update');
        Route::get('/destroy/{id}', [ConfigController::class, 'destroy'])->name('admin.config.destroy');
    });
    Route::prefix('seo')->group(function () {
        Route::get('/', [SEOController::class, 'index'])->name('admin.seo');
        Route::get('/create', [SEOController::class, 'create'])->name('admin.seo.create');
        Route::post('/store', [SEOController::class, 'store'])->name('admin.seo.store');
        Route::get('/edit/{id}', [SEOController::class, 'edit'])->name('admin.seo.edit');
        Route::post('/update/{id}', [SEOController::class, 'update'])->name('admin.seo.update');
        Route::get('/destroy/{id}', [SEOController::class, 'destroy'])->name('admin.seo.destroy');
    });
});