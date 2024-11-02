<!-- resources/views/salaries/edit.blade.php -->

@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Salary</h2>

    <form action="{{ route('salaries.update', $salary->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="employee_id" class="form-label">Employee Name</label>
            <select name="employee_id" class="form-control" required>
                <option value="">Select Employee</option>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}" {{ $employee->id == $salary->employee_id ? 'selected' : '' }}>
                        {{ $employee->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="base_salary" class="form-label">Base Salary</label>
            <input type="number" name="base_salary" class="form-control" value="{{ $salary->base_salary }}" required>
        </div>
        <div class="mb-3">
            <label for="allowance" class="form-label">Allowance</label>
            <input type="number" name="allowance" class="form-control" value="{{ $salary->allowance }}" required>
        </div>
        <div class="mb-3">
            <label for="deduction" class="form-label">Deduction</label>
            <input type="number" name="deduction" class="form-control" value="{{ $salary->deduction }}" required>
        </div>
        <div class="mb-3">
            <label for="pay_date" class="form-label">Payroll Date</label>
            <input type="date" name="pay_date" class="form-control" value="{{ $salary->pay_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('salaries.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
