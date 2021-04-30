<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

// Route::get('book', 'BookController@index');
Route::get('/book', [BookController::class, 'index']);


// + use App\Http\Controllers\BookController;

// - Route::get('/',"BbsEntryController@index");
// + Route::get('/', [BbsEntryController::class, 'index']);
// - Route::post('/create',"BbsEntryController@create");
// + Route::post('/create', [BbsEntryController::class, 'create']);
