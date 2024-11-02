<?php

// app/Models/Employee.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'position',
        'salary'
    ];

    // Relasi satu-ke-banyak dengan Salary
    public function salaries()
    {
        return $this->hasMany(Salary::class);
    }
}

