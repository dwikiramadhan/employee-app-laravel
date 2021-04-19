<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EmployeeController;

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

// Route::resource('employee', [EmployeeController::class]);

Route::get('/', function () {
    return view('main');
});

Route::get('/adminweb/dashboard', [PagesController::class, 'dashboard']);
Route::get('/adminweb/employee', [EmployeeController::class, 'employee']);
Route::get('/adminweb/employee/add', [EmployeeController::class, 'add']);
Route::post('/adminweb/employee/insert', [EmployeeController::class, 'insert']);