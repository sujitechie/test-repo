<?php

use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PersonController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserAlertController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Controllers\Auth\UserTeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Person
    Route::resource('people', PersonController::class, ['except' => ['store', 'update', 'destroy']]);

    // Product
    Route::resource('products', ProductController::class, ['except' => ['store', 'update', 'destroy']]);

    // Order
    Route::resource('orders', OrderController::class, ['except' => ['store', 'update', 'destroy']]);

    // Audit Logs
    Route::resource('audit-logs', AuditLogController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // Team
    Route::resource('teams', TeamController::class, ['except' => ['store', 'update', 'destroy']]);

    // User Alert
    Route::get('user-alerts/seen', [UserAlertController::class, 'seen'])->name('user-alerts.seen');
    Route::resource('user-alerts', UserAlertController::class, ['except' => ['store', 'update', 'destroy']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});

Route::group(['prefix' => 'team', 'as' => 'team.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserTeamController.php'))) {
        Route::get('/', [UserTeamController::class, 'show'])->name('show');
        Route::get('{team}/accept', [UserTeamController::class, 'accept'])->middleware('signed')->name('accept');
    }
});
