<?php

// database/seeders/EmployeeSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Employee::create([
            'name' => 'Ahmad',
            'email' => 'ahmad@example.com',
            'position' => 'Manager',
            'salary' => 8000000
        ]);

        Employee::create([
            'name' => 'Budi',
            'email' => 'budi@example.com',
            'position' => 'Staff',
            'salary' => 4000000
        ]);
    }
}

