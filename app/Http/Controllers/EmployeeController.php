<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {

        $employees = Employee::all();
        return view('employees.index',compact('employees'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:employees,email',
        'phone' => 'required',
        'position' => 'required',
        'salary' => 'required|numeric',
       ]);
       Employee::create($request->all());
         return redirect()->route('employees.index')->with('Empleado creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::find($id);
        return view('employees.show', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required',
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);
        $employee = Employee::find($id);
        $employee->update($request->all());

        return redirect()->route('employees.index')->with('Employee actualizado correctamente');
    }
     public function create()
    {
        return view('employees.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('Empleado eliminado correctamente.');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);

        return view('employees.edit', compact('employee'));
    }

}
