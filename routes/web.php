<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::post('/',  [IndexController::class, 'store'])->name('updatecount');
Route::get('/',  [IndexController::class, 'show']);
Route::get('mi',  function(){return View('mi');});
Route::get('mind',  function(){return View('mind');});
Route::get('min',  function(){return View('min');});
Route::get('statistic',  [IndexController::class, 'summary']);
Route::get('reset',  [IndexController::class, 'reset'])->name('reset');