<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
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
    return view('Home');
});

Route::get('/Home', [App\Http\Controllers\LandingPageController::class, 'Home'])->name('Home');
Route::get('/About', [App\Http\Controllers\LandingPageController::class, 'About'])->name('About');
Route::get('/ContactUs', [App\Http\Controllers\LandingPageController::class, 'ContactUs'])->name('ContactUs');
Route::get('/Stores', [App\Http\Controllers\LandingPageController::class, 'Stores'])->name('Stores');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Store routes
    Route::prefix('store')->group(function () {
        Route::get('/', [StoreController::class, 'index'])->name('store.show');
        Route::get('/edit', [StoreController::class, 'edit'])->name('store.edit');
        Route::put('/update', [StoreController::class, 'update'])->name('store.update');
    });

    //Product routes
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/csv', [ProductController::class, 'csv'])->name('csv');
    Route::get('/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/products/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    




    Route::put('/products/{product}/update', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    


});




require __DIR__.'/auth.php';
