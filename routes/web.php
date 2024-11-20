<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/Taraki_Home', [App\Http\Controllers\Taraki_HomeController::class, 'show']);

Route::get('/Taraki_Contents', [App\Http\Controllers\Taraki_ContentsController::class, 'show']);

Route::get('/Taraki_Clears', [App\Http\Controllers\Taraki_ClearsController::class, 'show']);

Route::get('/Taraki_Reach', [App\Http\Controllers\Taraki_ReachController::class, 'show']);

Route::get('/Taraki_Projects', [App\Http\Controllers\Taraki_ProjectsController::class, 'show']);

Route::get('/Taraki_OtherWebsites', [App\Http\Controllers\Taraki_OtherWebsitesController::class, 'show']);