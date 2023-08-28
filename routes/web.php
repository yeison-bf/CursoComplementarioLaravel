<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//     return view('auth/login');
// });



// Auth::routes();



// Route::middleware(['auth'])->group(function () {

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//     // Users
//     Route::get('/profile/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('user.profile');
//     Route::get('/profile/{id}/user', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');


//     //Usuarios
//     Route::get('/Users/{id}', [App\Http\Controllers\UserController::class, 'index'])->name('users.list');
//     Route::get('/User', [App\Http\Controllers\UserController::class, 'showRegister'])->name('User.show.register');
//     Route::post('/User', [App\Http\Controllers\UserController::class, 'create'])->name('User.register');
//     Route::get('/User/{id}', [App\Http\Controllers\UserController::class, 'showEdit'])->name('users.show.edit');
//     Route::post('/User/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
//     Route::put('/User/{id}', [App\Http\Controllers\UserController::class, 'UnapprobeUser'])->name('User.UnapprobeUser.active');


//     //Voluntarios
//     Route::get('/Voluntary/{id}', [App\Http\Controllers\VoluntaryController::class, 'index'])->name('voluntary.list');
//     Route::get('/Voluntary', [App\Http\Controllers\VoluntaryController::class, 'showRegister'])->name('voluntary.show.register');
//     Route::post('/voluntary', [App\Http\Controllers\VoluntaryController::class, 'register'])->name('voluntary.register');
//     Route::get('/patientEdit/{id}', [App\Http\Controllers\VoluntaryController::class, 'showEdit'])->name('show.update');
//     Route::post('/patientEdit/{id}', [App\Http\Controllers\VoluntaryController::class, 'update'])->name('patients.update');

//     Route::get('/history/{id}', [App\Http\Controllers\VoluntaryController::class, 'history'])->name('patiens.history'); //Falta
//     Route::put('/patientActive/{id}', [App\Http\Controllers\VoluntaryController::class, 'activePatient'])->name('patiens.active');


//     // Lideres
//     Route::get('/Liders/{id}', [App\Http\Controllers\LidersController::class, 'index'])->name('lideres.list');
//     Route::get('/Liders', [App\Http\Controllers\LidersController::class, 'showRegister'])->name('lideres.show.register');
//     Route::post('/Liders', [App\Http\Controllers\LidersController::class, 'create'])->name('lideres.register');
//     Route::get('/Lider/{id}', [App\Http\Controllers\LidersController::class, 'showEdit'])->name('lideres.show.update');
//     Route::post('/Lider/{id}', [App\Http\Controllers\LidersController::class, 'update'])->name('lideres.update');

//     Route::put('/Liders/{id}', [App\Http\Controllers\LidersController::class, 'UnapprobeLider'])->name('Lider.UnapprobeLider.active');


//     //Roles
//     Route::get('/roles', [App\Http\Controllers\RolesPermissionsController::class, 'index'])->name('roles.list');
//     Route::post('/roles', [App\Http\Controllers\RolesPermissionsController::class, 'create'])->name('roles.post');
//     Route::post('/rolesEditar', [App\Http\Controllers\RolesPermissionsController::class, 'update'])->name('roles.update');

    
//     //Configuraciones
//     Route::get('/configuration/{id}', [App\Http\Controllers\ConfigurationController::class, 'index'])->name('company.create');
//     Route::post('/upload',[App\Http\Controllers\ConfigurationController::class, 'upload'])->name('upload');
//     Route::post('/configuration',[App\Http\Controllers\ConfigurationController::class, 'create'])->name('create.configuration');
//     Route::post('/configuration/{id}',[App\Http\Controllers\ConfigurationController::class, 'update'])->name('update.configuration');


//     // //Profesiones
//     // Route::get('/professions', [App\Http\Controllers\ProfessionController::class, 'index'])->name('professions.list');
//     // Route::post('/professions', [App\Http\Controllers\ProfessionController::class, 'create'])->name('professions.register');
//     // Route::post('/professionsUpdate', [App\Http\Controllers\ProfessionController::class, 'update'])->name('professions.update');


//     // Turnos especialistas
//     Route::get('/calendar-event', [FullCalenderController::class, 'index'])->name('calendar-event');
//     Route::post('/calendar-crud-ajax', [FullCalenderController::class, 'calendarEvents']);


// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\Auth\LoginController::class, 'registerShow'])->name('login.show.register');



Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');


