<?php

// app/Models/Salary.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'base_salary',
        'allowance',
        'deduction',
        'net_salary',
        'pay_date'
    ];

    // Relasi banyak-ke-satu dengan Employee
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

