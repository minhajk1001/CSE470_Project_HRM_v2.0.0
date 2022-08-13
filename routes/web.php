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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/addEmployee', 'App\Http\Controllers\AddEmployeeController@aa');

//Route::view('form','addEmployee');
Route::post('submit','App\Http\Controllers\AddEmployeeController@insert');


Route::get('/viewEmployee','App\Http\Controllers\viewEmployeeController@index');

Route::get('payRoll','App\Http\Controllers\payRollController@index');
Route::post('giveSalary','App\Http\Controllers\payRollController@index');

Route::get('/addJobCircular','App\Http\Controllers\addJobCircularController@index');



Route::get('addJobCircular', [App\Http\Controllers\addJobCircularController::class, 'index']);
Route::post('addJobCircular', [App\Http\Controllers\addJobCircularController::class, 'store'])->name('file.store');

require __DIR__.'/auth.php';
