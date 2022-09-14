<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UsuariogeneralController;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/user', function () {
//         return Inertia::render('Usuarios');
//     })->name('user');
// });

Route::resource('UserGeneral',UsuariogeneralController::class)
->middleware(['auth:sanctum','verified']);

Route::delete('users/{user}/destroy', [UsuariogeneralController::class, 'destroy'])
    ->name('users.destroy')
    ->middleware('auth');

Route::get('user/{id}/edit', [UsuariogeneralController::class, 'edit'])
    ->name('user.edit')
    ->middleware('auth');

Route::put('users/{id}/update', [UsuariogeneralController::class, 'update'])
    ->middleware('auth');

