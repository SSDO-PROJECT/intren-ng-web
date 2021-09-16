<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\CompanyCotroller;
use App\Http\Controllers\UserController;
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
    return view('pages.welcome');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::get('/dashboard', [ ChartController::class, "index"])->name('dashboard');

    //Route::get('/company', [ CompanyCotroller::class, "view"])->name('company');

    Route::view('/company', 'pages.company')->name('company');

    Route::view('/intern', 'pages.intern')->name('intern');

    Route::view('/student', 'pages.student')->name('student');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});
