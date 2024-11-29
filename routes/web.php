<?php

use App\Http\Controllers\Applicant\ApplicantController;
use App\Http\Controllers\BuildingAdmin\BuildingAdminController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Tenant\TenantController;
use App\Http\Controllers\User\UserManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Superadmin\SuperadminController;


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
});







//---------------------Building Applicant Route---------------------
Route::middleware(['auth', 'checkrole:building_applicant'])->group(function () {
    Route::get('/applicant/status', [ApplicantController::class, 'index'])->name('applicant.status');
});

//---------------------Building Admin Route---------------------
Route::middleware(['auth', 'checkrole:building_admin'])->group(function () {
    Route::get('/building_admin/dashboard', [BuildingAdminController::class,'dashboard'])->name('building_admin.dashboard');
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
