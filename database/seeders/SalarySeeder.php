<?php

// database/seeders/SalarySeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Salary;

class SalarySeeder extends Seeder
{
    public function run()
    {
        Salary::create([
            'employee_id' => 1,
            'base_salary' => 8000000,
            'allowance' => 500000,
            'deduction' => 100000,
            'net_salary' => 8000000 + 500000 - 100000,
            'pay_date' => '2024-01-31'
        ]);

        Salary::create([
            'employee_id' => 2,
            'base_salary' => 4000000,
            'allowance' => 300000,
            'deduction' => 50000,
            'net_salary' => 4000000 + 300000 - 50000,
            'pay_date' => '2024-01-31'
        ]);
    }
}
