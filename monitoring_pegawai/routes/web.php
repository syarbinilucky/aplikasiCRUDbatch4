<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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
Route::get('/project',[ProjectController::class, 'index'])->name('project');
Route::get('/tambah',[ProjectController::class, 'tambah'])->name('tambah');
Route::post('/insert',[ProjectController::class, 'insert'])->name('insert');
// Route::get('/tampilkandata/{id}',[ProjectController::class, 'tampilkandata'])->name('tampilkandata');

Route::get('/tampilkandata/{id}',[ProjectController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[ProjectController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[ProjectController::class, 'delete'])->name('delete');
    

