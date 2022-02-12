<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
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
// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/login',[PagesController::class,'login']);

Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::get('/student/get',[StudentController::class,'get'])->name('student.get');
Route::get('/student/list',[StudentController::class,'list'])->name('student.list');
Route::get('/student/details/{id}/{name}',[StudentController::class,'details'])->name('student.details');