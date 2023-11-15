<?php
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
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
});