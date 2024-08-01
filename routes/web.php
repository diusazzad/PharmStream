<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Protected Routes (Require Authentication)
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes (Require Authentication and Admin Role)
// Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
//     // Dashboard
//     Route::resource('dashboard', AdminDashboardController::class);

//     // Notifications
//     Route::resource('notifications', NotificationController::class);

//     // Users (Including Profile Management)
//     Route::resource('users', UserController::class);
//     Route::post('/users/{user}/update-profile', [UserController::class, 'updateProfile'])->name('profile.update');
//     Route::put('/users/{user}/update-password', [UserController::class, 'updatePassword'])->name('update-password');

//     // Other Admin Resources
//     Route::resource('permissions', PermissionController::class);
//     Route::resource('products', ProductController::class); // Assuming ProductController instead of RoleController
//     Route::resource('sales', SaleController::class);
//     Route::resource('roles', RoleController::class);
//     Route::resource('categories', CategoryController::class);
//     Route::resource('settings', SettingController::class);
//     Route::resource('backups', BackupController::class); // Assuming BackupController instead of BackupController
// });

Route::resource('/dashboard', TestController::class);

require __DIR__ . '/auth.php';
