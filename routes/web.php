<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

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
    return view('Index');
});

Route::get('/Logout', function () {
    return view('Index');
});

Route::get('/User', function () {
    return view('User');
});

Route::get('/AddUser', function () {
    return view('AddUser');
});

Route::match(['get', 'post'],'/Admin', [myController::class, 'AdminPage']);

Route::match(['get', 'post'],'/AddBook', [myController::class, 'AddBook']);


Route::get('/BookTable', [myController::class, 'BookTable']);
Route::get('/bookDelete/{bookId}', [myController::class, 'bookDelete']);

Route::match(['get', 'post'], '/AddStudent', [myController::class, 'AddStudent']);
Route::get('/ViewStudent', [myController::class, 'ViewStudent']);
Route::get('/studentDelete/{studentId}', [myController::class, 'studentDelete']);


Route::match(['get', 'post'],'/LendBook', [myController::class, 'LendBook']);


Route::get('/BorrowBook', [myController::class, 'BorrowBook']);
Route::get('/borrowDelete/{borrowId}', [myController::class, 'borrowDelete']);


Route::get('/login', 'LoginController@show')->name('login.show');
Route::post('/login', 'LoginController@login')->name('login.perform');


