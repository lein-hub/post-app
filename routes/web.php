<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\TestController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::get('/test', function () {
    return 'Welcome !!!';
});

Route::get('/test2', function () {
    return view('test.index');
});

Route::get('/test3', function () {
    $name = '홍길동';
    $age = 10;
    return view('test.show', compact('name', 'age'));
});

Route::get('/test4', [TestController::class, 'index']);

Route::get('/posts/create', [PostsController::class, 'create']);/*->middleware(['auth']);*/

Route::post('/posts/store', [PostsController::class, 'store']);

Route::get('/posts/edit', [PostsController::class, 'edit']);

Route::get('/posts/update', [PostsController::class, 'update']);

Route::get('/posts/destroy', [PostsController::class, 'destroy']);

Route::get('/posts/show/{id}', [PostsController::class, 'show'])->name('posts.show');

Route::get('/posts/index', [PostsController::class, 'index'])->name('posts.index');
