<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
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

Route::get('/', [StudentsController::class, 'index'])->name('student.index');
Route::get('/create', [StudentsController::class, 'create'])->name('student.create');
Route::post('/store', [StudentsController::class, 'store'])->name('student.store');
Route::get('/edit/{id}', [StudentsController::class, 'edit'])->name('student.edit');
Route::post('/update/{id}', [StudentsController::class, 'update'])->name('student.update');
Route::get('/delete/{id}', [StudentsController::class, 'destroy'])->name('student.delete');
