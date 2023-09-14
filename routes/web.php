<?php

use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

Route::get('/users', [UserController::class, 'index'])->name('users.show.list');
Route::get('/inicio', [HomeController::class, 'index'])->name('inicio');
Route::get('/home', [HomeController::class, 'index'])->name('inicio');



Route::get('/roles', [RoleController::class, 'index'])->name('roles.show.list');
Route::post('/roles', [RoleController::class, 'store'])->name('role.create');
















    // //Usuarios
    // Route::get('/Users/{id}', [App\Http\Controllers\UserController::class, 'index'])->name('users.list');
    // Route::get('/User', [App\Http\Controllers\UserController::class, 'showRegister'])->name('User.show.register');
    // Route::post('/User', [App\Http\Controllers\UserController::class, 'create'])->name('User.register');
    // Route::get('/User/{id}', [App\Http\Controllers\UserController::class, 'showEdit'])->name('users.show.edit');
    // Route::post('/User/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    // Route::put('/User/{id}', [App\Http\Controllers\UserController::class, 'UnapprobeUser'])->name('User.UnapprobeUser.active');

    //Roles
    // Route::get('/roles', [App\Http\Controllers\RolesPermissionsController::class, 'index'])->name('roles.list');
    // Route::post('/roles', [App\Http\Controllers\RolesPermissionsController::class, 'create'])->name('roles.post');
    // Route::post('/rolesEditar', [App\Http\Controllers\RolesPermissionsController::class, 'update'])->name('roles.update');

});
