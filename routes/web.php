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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', function () {
    return view('creat');
});
Route::group([ 'middleware' => 'auth'], function () {
Route::post('/save','App\Http\Controllers\StudentController@insert');
Route::get('/studentlist','App\Http\Controllers\StudentController@studentlist');
Route::get('/editStudent/{id}','App\Http\Controllers\StudentController@editStudent');
Route::get('/deleteStudent/{id}','App\Http\Controllers\StudentController@deleteStudent');
Route::post('/updateStudent/{id}','App\Http\Controllers\StudentController@updateStudent');
Route::get('/addMark','App\Http\Controllers\StudentController@addMark');
Route::post('/saveMark/{id?}','App\Http\Controllers\StudentController@saveMark');
Route::get('/markList','App\Http\Controllers\StudentController@markList');
Route::get('/deleteMarks/{id}','App\Http\Controllers\StudentController@deleteMarks');
Route::get('/editMark/{id}','App\Http\Controllers\StudentController@editMark');
});