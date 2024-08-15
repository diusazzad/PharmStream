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
    Route::get('/role/create', [SuperAdminController::class, 'superadmin_role_create'])->name('superadmin.role.create');


    Route::get('/setting/index', [SuperAdminController::class, 'superadmin_general_setting'])->name('superadmin.setting.index');
    Route::get('/setting/email', [SuperAdminController::class, 'superadmin_email_setting'])->name('superadmin.setting.email');
    Route::get('/setting/language', [SuperAdminController::class, 'superadmin_language_setting'])->name('superadmin.setting.language');

    Route::get('/customer/create', [SuperAdminController::class, 'superadmin_customer_create'])->name('superadmin.customer.add');
    Route::get('/customer/index', [SuperAdminController::class, 'superadmin_customer_index'])->name('superadmin.customer.index');

    Route::get('/expense/create', [SuperAdminController::class, 'superadmin_expense_create'])->name('superadmin.expense.create');
    Route::get('/expense/index', [SuperAdminController::class, 'superadmin_expense_index'])->name('superadmin.expense.index');
    Route::get('/expense/category/create', [SuperAdminController::class, 'superadmin_expense_category_create'])->name('superadmin.expense_category.create');
    Route::get('/expense/category/index', [SuperAdminController::class, 'superadmin_expense_category_index'])->name('superadmin.expense_category.index');

    Route::get('/supplier/create', [SuperAdminController::class, 'superadmin_supplier_create'])->name('superadmin.supplier.create');
    Route::get('/supplier/index', [SuperAdminController::class, 'superadmin_supplier_index'])->name('superadmin.supplier.index');

    Route::get('/vendor/create', [SuperAdminController::class, 'superadmin_vendor_create'])->name('superadmin.vendor.create');
    Route::get('/vendor/index', [SuperAdminController::class, 'superadmin_vendor_index'])->name('superadmin.vendor.index');

    Route::get('/medicine/create', [SuperAdminController::class, 'superadmin_medicine_create'])->name('superadmin.medicine.create');
    Route::get('/medicine/index', [SuperAdminController::class, 'superadmin_medicine_index'])->name('superadmin.medicine.index');
    Route::get('/medicine/category', [SuperAdminController::class, 'superadmin_medicine_category'])->name('superadmin.medicine.category');
    Route::get('/medicine/unit', [SuperAdminController::class, 'superadmin_medicine_unit'])->name('superadmin.medicine.unit');
    Route::get('/medicine/leaf', [SuperAdminController::class, 'superadmin_medicine_leaf'])->name('superadmin.medicine.leaf');
    Route::get('/medicine/type', [SuperAdminController::class, 'superadmin_medicine_type'])->name('superadmin.medicine.type');
    Route::get('/medicine/import', [SuperAdminController::class, 'superadmin_medicine_import'])->name('superadmin.medicine.import');

    Route::get('/purchase/create', [SuperAdminController::class, 'superadmin_purchase_create'])->name('superadmin.purchase.create');
    Route::get('/purchase/index', [SuperAdminController::class, 'superadmin_purchase_create'])->name('superadmin.purchase.index');
    Route::get('/purchase/history', [SuperAdminController::class, 'superadmin_purchase_create'])->name('superadmin.purchase.history');


    Route::get('/payment', [SuperAdminController::class, 'superadmin_payment_index'])->name('superadmin.payment.index');
});

require __DIR__ . '/auth.php';
