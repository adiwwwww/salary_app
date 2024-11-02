<!-- resources/views/salaries/index.blade.php -->

@extends('layout')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Salary List</h2>

    <a href="{{ route('salaries.create') }}" class="btn btn-primary mb-3">Add New Salary</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Employee Name</th>
                <th>Base Salary</th>
                <th>Allowance</th>
                <th>Deduction</th>
                <th>Net Salary</th>
                <th>Payroll Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salaries as $salary)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $salary->employee->name }}</td>
                    <td>{{ number_format($salary->base_salary, 0, ',', '.') }}</td>
                    <td>{{ number_format($salary->allowance, 0, ',', '.') }}</td>
                    <td>{{ number_format($salary->deduction, 0, ',', '.') }}</td>
                    <td>{{ number_format($salary->net_salary, 0, ',', '.') }}</td>
                    <td>{{ $salary->pay_date }}</td>
                    <td>
                        <a href="{{ route('salaries.edit', $salary->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('salaries.destroy', $salary->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
