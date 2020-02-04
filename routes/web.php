<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::name('admin.')->prefix('admin')->group(function () {
    Route::match(['get', 'post'], 'login', 'Auth\LoginController@adminLogin')->name('login');

    Route::middleware('auth:admin')->group(function () {
        Route::redirect('/', 'home');
        Route::get('home', 'AdminController@index')->name('home');
    });
});

Route::name('agent.')->prefix('agent')->group(function () {
    Route::match(['get', 'post'], 'login', 'Auth\LoginController@agentLogin')->name('login');

    Route::middleware('auth:agent')->group(function () {
        Route::redirect('/', 'home');
        Route::get('home', 'AgentController@index')->name('home');
    });
});

Route::name('employee.')->prefix('employee')->group(function () {
    Route::match(['get', 'post'], 'login', 'Auth\LoginController@employeeLogin')->name('login');

    Route::middleware('auth:employee')->group(function () {
        Route::redirect('/', 'home');
        Route::get('home', 'EmployeeController@index')->name('home');
    });
});

Route::resource('property', 'PropertyController');
Route::resource('agent', 'AgentController');
Route::resource('employee', 'EmployeeController');
Route::resource('customer', 'CustomerController');
