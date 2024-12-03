<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->save();

        return redirect()->route('index');
    }

    // public function show(){
    //     return view('employees.details');
    // }
    public function show($id)
    {
       
        $employee = Employee::find($id);
      if (!$employee) {
            abort(404, 'Employee not found');
        }
        return view('employees.details', compact('employee'));
    }
}

