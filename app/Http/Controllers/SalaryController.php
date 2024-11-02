<?php

// app/Http/Controllers/SalaryController.php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\Employee;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    // Menampilkan daftar gaji
    public function index()
    {
        $salaries = Salary::with('employee')->get();
        return view('salaries.index', compact('salaries'));
    }

    // Menampilkan form untuk menambah data gaji baru
    public function create()
    {
        $employees = Employee::all();  // Mengambil daftar pegawai
        return view('salaries.create', compact('employees'));
    }

    // Menyimpan data gaji baru
    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'base_salary' => 'required|numeric',
            'allowance' => 'required|numeric',
            'deduction' => 'required|numeric',
            'pay_date' => 'required|date'
        ]);

        $net_salary = $request->base_salary + $request->allowance - $request->deduction;
        Salary::create(array_merge($request->all(), ['net_salary' => $net_salary]));

        return redirect()->route('salaries.index')->with('success', 'Salary added successfully.');
    }

    // Menampilkan form edit data gaji
    public function edit($id)
    {
        $salary = Salary::find($id);
        $employees = Employee::all();
        return view('salaries.edit', compact('salary', 'employees'));
    }

    // Memperbarui data gaji
    public function update(Request $request, $id)
    {
        $request->validate([
            'employee_id' => 'required',
            'base_salary' => 'required|numeric',
            'allowance' => 'required|numeric',
            'deduction' => 'required|numeric',
            'pay_date' => 'required|date'
        ]);

        $salary = Salary::find($id);
        $net_salary = $request->base_salary + $request->allowance - $request->deduction;
        $salary->update(array_merge($request->all(), ['net_salary' => $net_salary]));

        return redirect()->route('salaries.index')->with('success', 'Salary updated successfully.');
    }

    // Menghapus data gaji
    public function destroy($id)
    {
        Salary::find($id)->delete();
        return redirect()->route('salaries.index')->with('success', 'Salary deleted successfully.');
    }
}

