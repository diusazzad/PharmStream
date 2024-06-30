<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->group(function () {

    Route::resource('/dashboard', AdminDashboardController::class);

    Route::resource('/notification', NotificationController::class);

    Route::resource('/profile', UserController::class);
    Route::post('profile/{user}', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::put('profile/update-password/{user}', [UserController::class, 'updatePassword'])->name('update-password');

    Route::resource('/logout', ProfileController::class);

    Route::resource('/permission', PermissionController::class);

    Route::resource('/products', RoleController::class);

    Route::resource('/sales', SaleController::class);

    Route::resource('/roles', RoleController::class);

    Route::resource('/categories', CategoryController::class);

    Route::resource('/settings', SettingController::class);

    Route::resource('/backup', BackupController::class);

});

require __DIR__ . '/auth.php';
