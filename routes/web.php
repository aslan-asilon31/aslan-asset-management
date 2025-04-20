<?php

use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');



Route::post('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');


Route::get('/', \App\Livewire\Auth\Login::class)->name('login');


Route::middleware('auth:sanctum')->group(function () {

    # admin
    Route::get('/dashboard', \App\Livewire\Admin\Dashboard\Dashboard::class)->name('dashboard');
    Route::get('/dasbor-user', \App\Livewire\User\DasborUser\DasborUser::class)->name('dasbor-user');

    Route::get('/role', App\Livewire\Admin\Role\RoleList::class)->name('role');
    Route::get('/role/create', App\Livewire\Admin\Role\RoleCrud::class)->name('role-create');
    Route::get('/role/edit/{id}', App\Livewire\Admin\Role\RoleCrud::class)->name('role-edit');

    Route::get('/permission', App\Livewire\Admin\Permission\PermissionList::class)->name('permission');
    Route::get('/permission/create', App\Livewire\Admin\Permission\PermissionCrud::class)->name('permission-crud');
    Route::get('/permission/edit/{id}', App\Livewire\Admin\Permission\PermissionCrud::class)->name('permission-crud');

    Route::get('/profil', App\Livewire\Admin\Profil\Profil::class)->name('profil');

    Route::get('/asset-type', App\Livewire\Admin\AssetType\AssetTypeList::class)->name('asset-type');
    Route::get('/asset-category', App\Livewire\Admin\AssetCategory\AssetCategoryList::class)->name('asset-category');
    Route::get('/asset', App\Livewire\Admin\Asset\AssetList::class)->name('asset');



});
