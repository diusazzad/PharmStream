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
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
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

// Route::resource('/dashboard', TestController::class);
// Route::resource('/users/index', SuperAdminController::class);
// Route::get('user/index', [SuperAdminController::class, 'superadmin_user_index'])->name('superadmin.user.index');



// Route::middleware(['auth', 'role:super_add'])->prefix('admin')->group(function () {
//     Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
//     Route::get('/users', [SuperAdminController::class, 'users'])->name('superadmin.users');
//     // ... other superadmin routes
// });

Route::prefix('superadmin')->group(function () {
    Route::resource('/dashboard', SuperAdminController::class);
    Route::get('/user/index', [SuperAdminController::class, 'superadmin_user_index'])->name('superadmin.user.index');
    Route::get('/role/index', [SuperAdminController::class, 'superadmin_role_index'])->name('superadmin.role.index');
});

require __DIR__ . '/auth.php';
