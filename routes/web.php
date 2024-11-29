<?php

use App\Http\Controllers\Applicant\ApplicantController;
use App\Http\Controllers\BuildingAdmin\BuildingAdminController;
use App\Http\Controllers\Maintane\MaintenanceController;
use App\Http\Controllers\Resource\UtilityController;
use App\Http\Controllers\Setting\TeamPositionController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Tenant\TenantController;
use App\Http\Controllers\Unit\UnitController;
use App\Http\Controllers\User\UserManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Superadmin\SuperadminController;
use App\Http\Controllers\Tenant\TenantSecController;
use App\Http\Controllers\Staffing\StaffingController;



//---------------------Auth route--------------------

// Login routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Register routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);



//---------------------Superadmin Route---------------------
Route::middleware(['auth', 'checkrole:superadmin'])->group(function () {
    Route::get('/superadmin/dashboard', [SuperadminController::class, 'dashboard'])->name('superadmin.dashboard');


    // User Management Routes
    Route::prefix('user-management')->group(function () {
        Route::get('/', [UserManagementController::class, 'index'])->name('user.management.index');
        Route::get('/create', [UserManagementController::class, 'create'])->name('user.management.create');
        Route::post('/store', [UserManagementController::class, 'store'])->name('user.management.store');
        Route::get('/edit/{id}', [UserManagementController::class, 'edit'])->name('user.management.edit');
        Route::put('/update/{id}', [UserManagementController::class, 'update'])->name('user.management.update');
        Route::delete('/delete/{id}', [UserManagementController::class, 'destroy'])->name('user.management.destroy');
    });


    // Tenant Management Routes
    Route::prefix('tenant')->name('tenant.')->group(function () {
        Route::get('/', [TenantSecController::class, 'index'])->name('index');
        Route::post('/store', [TenantSecController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TenantSecController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [TenantSecController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [TenantSecController::class, 'destroy'])->name('destroy');
    });

    // unit
    Route::prefix('unit')->group(function () {
        Route::get('/', [UnitController::class, 'index'])->name('unit.index');
        Route::post('/store', [UnitController::class, 'store'])->name('unit.store');
        Route::get('/{id}/edit', [UnitController::class, 'edit'])->name('unit.edit');
        Route::put('/update/{id}', [UnitController::class, 'update'])->name('unit.update');
        Route::delete('/delete/{id}', [UnitController::class, 'destroy'])->name('unit.destroy');
    });

    // mainitance
    Route::prefix('maintane')->group(function () {
        Route::get('/', [MaintenanceController::class, 'index'])->name('maintane.index');
        Route::post('/store', [MaintenanceController::class, 'store'])->name('maintane.store');
        Route::put('/update/{id}', [MaintenanceController::class, 'update'])->name('maintane.update'); // Use PUT for updates
        Route::delete('/delete/{id}', [MaintenanceController::class, 'destroy'])->name('maintane.destroy');
    });

    // Utilities and Resource
    Route::prefix('utilities')->group(function () {
        Route::get('/', [UtilityController::class, 'index'])->name('utilities.index');
        Route::post('/store', [UtilityController::class, 'store'])->name('utilities.store');
        Route::post('/update/{utility}', [UtilityController::class, 'update'])->name('utilities.update');
        Route::delete('/delete/{utility}', [UtilityController::class, 'destroy'])->name('utilities.destroy');
    });

    // staff controller
    Route::prefix('staffing')->group(function () {
        Route::get('/', [StaffingController::class, 'index'])->name('staffing.index');
        Route::post('/store', [StaffingController::class, 'store'])->name('staffing.store');
        Route::put('/update/{staff}', [StaffingController::class, 'update'])->name('staffing.update');
        Route::delete('/delete/{staff}', [StaffingController::class, 'destroy'])->name('staffing.destroy');
    });

    // setting controller
    // Route::prefix('settings')->group(function () {
    //     Route::get('/', [TeamPositionController::class, 'index'])->name('settings.index');
    //     Route::post('/team/store', [TeamPositionController::class, 'storeTeam'])->name('settings.team.store');
    //     Route::post('/position/store', [TeamPositionController::class, 'storePosition'])->name('settings.position.store');
    //     Route::delete('/team/delete/{team}', [TeamPositionController::class, 'destroyTeam'])->name('settings.team.destroy');
    //     Route::delete('/position/delete/{position}', [TeamPositionController::class, 'destroyPosition'])->name('settings.position.destroy');
    // });

    Route::prefix('settings')->group(function () {
        Route::get('/', [TeamPositionController::class, 'index'])->name('settings.index');
        Route::post('/team/store', [TeamPositionController::class, 'storeTeam'])->name('settings.team.store');
        Route::post('/position/store', [TeamPositionController::class, 'storePosition'])->name('settings.position.store');
        Route::put('/team/update/{team}', [TeamPositionController::class, 'updateTeam'])->name('settings.team.update');
        Route::put('/position/update/{position}', [TeamPositionController::class, 'updatePosition'])->name('settings.position.update');
        Route::delete('/team/delete/{team}', [TeamPositionController::class, 'destroyTeam'])->name('settings.team.destroy');
        Route::delete('/position/delete/{position}', [TeamPositionController::class, 'destroyPosition'])->name('settings.position.destroy');
    });
});


//---------------------Building Applicant Route---------------------
Route::middleware(['auth', 'checkrole:building_applicant'])->group(function () {
    Route::get('/applicant/status', [ApplicantController::class, 'index'])->name('applicant.status');
});

//---------------------Building Admin Route---------------------
Route::middleware(['auth', 'checkrole:building_admin'])->group(function () {
    Route::get('/building_admin/dashboard', [BuildingAdminController::class, 'dashboard'])->name('building_admin.dashboard');
});

//---------------------Tenant Route---------------------
Route::middleware(['auth', 'checkrole:tenant'])->group(function () {
    Route::get('/tenant/dashboard', [TenantController::class, 'dashboard'])->name('tenant.dashboard');
});

//---------------------Staff Route---------------------
Route::middleware(['auth', 'checkrole:staff'])->group(function () {
    Route::get('/staff/dashboard', [StaffController::class, 'dashboard'])->name('staff.dashboard');
});

//---------------------Testing View--------------------
Route::get('/', function () {
    return view('client.index');
});


Route::get('/testing', function () {
    return view('auth.test');
});

// Route::get('/', function () {
//     return view('welcome');
// });
