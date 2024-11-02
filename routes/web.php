<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;

// Route::get('/', function () {
//     return view('welcome');
// });


// routes/web.php

//  Route ke View Salaries
Route::get('/salaries', [SalaryController::class, 'index'])->name('salaries.index');
Route::get('/salaries/create', [SalaryController::class, 'create'])->name('salaries.create');
Route::post('/salaries', [SalaryController::class, 'store'])->name('salaries.store');
Route::get('/salaries/{salary}', [SalaryController::class, 'show'])->name('salaries.show');
Route::get('/salaries/{salary}/edit', [SalaryController::class, 'edit'])->name('salaries.edit');
Route::put('/salaries/{salary}', [SalaryController::class, 'update'])->name('salaries.update');
Route::delete('/salaries/{salary}', [SalaryController::class, 'destroy'])->name('salaries.destroy');

//  Route ke View Employees
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

// Route::resource('employees', EmployeeController::class);
// Route::resource('salaries', SalaryController::class);
