<?php

// app/Http/Controllers/EmployeeController.php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Menampilkan semua data pegawai
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Menampilkan form untuk menambah data pegawai baru
    public function create()
    {
        return view('employees.create');
    }

    // Menyimpan data pegawai baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'position' => 'required',
            'salary' => 'required|numeric'
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    // Menampilkan form untuk mengedit data pegawai
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }

    // Memperbarui data pegawai yang ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,' . $id,
            'position' => 'required',
            'salary' => 'required|numeric'
        ]);

        $employee = Employee::find($id);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    // Menghapus data pegawai
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
