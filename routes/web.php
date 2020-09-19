<?php

use App\Http\Controllers\BlockController;
use App\Http\Controllers\PageController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/', [PageController::class, 'homePage'])->name('pages.home');

Route::get('/blocks', [BlockController::class, 'index'])->name('blocks.index');
Route::get('/blocks/{id}', [BlockController::class, 'show'])->name('blocks.show');