<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect()->route('admin.login.form');
});

// User Login Routes
Route::get('/user/login', [UserController::class, 'showLoginForm'])->name('user.login.form');
Route::post('/user/login', [UserController::class, 'login'])->name('user.login');
Route::post('/user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::middleware(['auth:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});

// Admin Login Routes
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/change_password/{id}', [AdminController::class, 'showChangePasswordForm'])->name('admin.change.password');
    Route::post('/admin/change_password/{id}', [AdminController::class, 'updatePassword'])->name('admin.update.password');
    // Show user creation form
    Route::get('/admin/create_user', [AdminController::class, 'showCreateUser'])->name('admin.create.user');
    // Store new user
    Route::post('/admin/create_user', [AdminController::class, 'storeUser'])->name('admin.store.user');
    //Showing the Users List
    Route::get('admin/list_user', [AdminController::class, 'userList'])->name('admin.list.user');
    //Deleting the Users List
    Route::delete('/admin/delete_user/{id}', [AdminController::class, 'userDelete'])->name('admin.delete.user');



});
