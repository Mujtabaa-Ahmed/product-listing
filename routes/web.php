<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

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

// Route::get('/n', function () {
//     return view('navigation/nav');
// });
Route::get('/',[NewController::class,'index'])->name('home');
Route::get('/home',[NewController::class,'index'])->name('home');    
Route::get('/home/add',[NewController::class,'add'])->name('add');
Route::get('/home/list',[NewController::class,'list'])->name('list');
Route::post('/home/add',[NewController::class,'form'])->name('form');
Route::get('/home/view',[NewController::class,'view'])->name('view');
Route::get('/home/view/{productid}',[NewController::class,'details'])->name('details');
Route::get('/home/list/delete/{productlistid}',[NewController::class,'delete'])->name('delete');
Route::get('/home/list/{updatepid}/update',[NewController::class,'update'])->name('update');
Route::post('/home/list/{updateppid}/update-product',[NewController::class,'udata'])->name('update-data');
