<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::resource('user', UserController::class);

Route::get("/trashed",[UserController::class,'viewTrashed'])->name('view.trashed');
Route::get("/restore/{id}",[UserController::class,'restore'])->name('user.restore');
Route::get("permnanent/{id}",[UserController::class,'permanantdelete'])->name('user.permanentdelete');
