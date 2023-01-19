<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

// VIEW
// route::view('/','auth.login');
Route::view('/', 'auth.login')->name('auth.login');



Route::get('/employee/table', [EmployeeController::class, 'index'])->name('employee.table');
Route::get('/employee/test-datatables', [EmployeeController::class, 'test_dataTables'])->name('employee.test-datatables');


Route::get('/employee/createEmployee', [EmployeeController::class, 'create'])->name('employee.createEmployee');



Route::post('/employee/table', [EmployeeController::class, 'store'])->name('employee.store');

Route::get('/employee/show/{id}', [EmployeeController::class, 'show'])->name('employee.show');

Route::get('/employee/editEmployee/{id}', [EmployeeController::class, 'edit'])->name('employee.editEmployee');

Route::put('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');

Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');



// Authentication
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
