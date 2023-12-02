<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\InformationController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('classroom/pdf', [App\Http\Controllers\ClassroomController::class,'pdf'])->name('classroom.pdf');

Route::resource('discipline', DisciplineController::class);
Route::resource('classroom', ClassroomController::class);
Route::resource('lesson', LessonController::class);
Route::resource('reservation', ReservationController::class);
Route::resource('membership', MembershipController::class);
Route::resource('role', RoleController::class);


Route::get('/exportar',[ExportController::class,'index'])->name('index');
Route::get('/export',[ExportController::class,'export'])->name('export');

Route::get("/chars",[ApiController::class, "index"]);
// mirar si se pone en api


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
