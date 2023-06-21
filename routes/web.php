<?php

use App\Http\Controllers\DashBoardPostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use \App\Models\product;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;


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
    return view('products');
});

Route::get('/', [ProductController::class, 'index']);

Route::get('products/{product}', [ProductController::class, 'showdetail']);

Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all()
    ]);
});

// Route Model Binding
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('products', [
        'title' => "Product By : $category->name",
        'products' => $category->product->load(['user', 'category']),
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('products', [
        'title' => "Product By : $author->name",
        'products' => $author->product->load(['user', 'category'])
    ]);
});



// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/products/checkSlug', [DashBoardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/products', DashBoardPostController::class)->middleware('auth');