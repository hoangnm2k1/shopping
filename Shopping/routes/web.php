<?php

use App\Http\Controllers\dashboard\CartController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\frontend\ProductFrontendController;
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

Route::get("/", [ProductFrontendController::class, "indexProducts"])->name("indexProducts");

Route::prefix('admin')->group(function () {
    // Route::get("/product", [ProductController::class, "showProducts"])->name("product.showProducts");
    Route::get("/product/create", [ProductController::class, "showCreateProduct"])->name("product.showCreateProduct");
    Route::post("/product/create", [ProductController::class, "saveProduct"])->name("product.saveProduct");
    Route::get("/product/list", [ProductController::class, "listProducts"])->name("product.listProducts");
    Route::get("/product/edit/{id}", [ProductController::class, "showEditProduct"])->name("product.showEditProduct");
    Route::post("/product/edit/{id}", [ProductController::class, "updateProduct"])->name("product.updateProduct");
    Route::get("/product/delete/{id}", [ProductController::class, "deleteProduct"])->name("product.deleteProduct");
});

// Route::get('/', [CartController::class, "showProduct"])->name('showProduct');
Route::get("/cart", [CartController::class, "addToCartProduct"])->name("cart.addToCartProduct");
