<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CustomController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', [BlogPostController::class, "index"])->name('blog.index');
Route::get('blog/{blogPost}', [BlogPostController::class, "show"])->name('blog.show');
Route::get('blog-create', [BlogPostController::class, "create"])->name('blog.create');
Route::post('blog-create', [BlogPostController::class, "store"]);
Route::get('blog-edit/{blogPost}', [BlogPostController::class, "edit"])->name('blog.edit');
Route::post('blog-edit/{blogPost}', [BlogPostController::class, "update"]);
Route::delete('blog/{blogPost}', [BlogPostController::class, "destroy"]);
Route::get('page', [BlogPostController::class, "page"]);
Route::get('query', [BlogPostController::class, "query"]);
Route::get('register', [CustomController::class, 'create'])->name("auth.create");
Route::post('register', [CustomController::class, 'store']);
Route::get('login', [CustomController::class, 'index'])->name("login"); // laravel reconnait la route login
Route::post('authentification', [CustomController::class, 'authentification'])->name("authentification");
Route::get('user-list', [CustomController::class, 'userList'])->name('user.list')->middleware('auth');
Route::get('logout', [CustomController::class, 'logout'])->name('logout');