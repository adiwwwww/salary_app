<?php

// database/seeders/AllowanceSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Allowance;

class AllowanceSeeder extends Seeder
{
    public function run()
    {
        Allowance::create([
            'name' => 'Transportasi',
            'amount' => 500000,
            'description' => 'Tunjangan transportasi'
        ]);

        Allowance::create([
            'name' => 'Makan',
            'amount' => 300000,
            'description' => 'Tunjangan makan'
        ]);
    }
}

