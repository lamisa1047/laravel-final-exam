<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::get('/home', function () {
    return view('home');
});

Route::get('/employees/index', [EmployeeController::class, 'index'])->name('index');
Route::post('/store', [EmployeeController::class, 'store'])->name('store');
Route::get('/employee/{name}', function ($name) {
    return "Hello, " . ucfirst($name) . ". Welcome to the employee management system!";
});
// Route::get('/employees/{id}/details', [EmployeeController::class, 'show'])->name('employees.details');
Route::get('/employee/{id}/details', [EmployeeController::class, 'show']);
