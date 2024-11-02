<!-- resources/views/salaries/create.blade.php -->

@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Add New Salary</h2>

    <form action="{{ route('salaries.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="employee_id" class="form-label">Employee Name</label>
            <select name="employee_id" class="form-control" required>
                <option value="">Select Employee</option>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="base_salary" class="form-label">Base Salary</label>
            <input type="number" name="base_salary" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="allowance" class="form-label">Allowance</label>
            <input type="number" name="allowance" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deduction" class="form-label">Deduction</label>
            <input type="number" name="deduction" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="pay_date" class="form-label">Payroll Date</label>
            <input type="date" name="pay_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('salaries.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
