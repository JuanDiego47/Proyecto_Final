<?php

use App\Http\Controllers\AdminsController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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
    return view('welcome');
});


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/admin', AdminsController::class);


Route::middleware(['admin'])->group(function () {
    Route::get('admin', AdminsController::class);
    #Route::get('member', MembersController::class);
    #Route::get('disciplines', DisciplineController::class);

    // Puedes agregar más rutas que requieran el mismo middleware aquí
});

Route::middleware(['coach'])->group(function () {
    Route::get('Disciplines', AdminsController::class);
    #Route::get('member', [MembersController::class, 'index']);
    #Route::get('disciplines', DisciplineController::class);

    // Puedes agregar más rutas que requieran el mismo middleware aquí
});




