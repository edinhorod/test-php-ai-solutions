<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CategoryController::class,'index'])->name('upload');
Route::post('/', [CategoryController::class,'upload_file']);
Route::get('/send-job', [CategoryController::class,'sendJob']);
Route::get('/truncate-documents', [CategoryController::class,'truncateDocuments']);