<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TasksController;

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
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth'], function () {
    Route::resource('post', PostController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('task', TasksController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('email', EmailController::class);
    Route::resource('department', DepartmentsController::class);
});
