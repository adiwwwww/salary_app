<?php

// database/seeders/DeductionSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Deduction;

class DeductionSeeder extends Seeder
{
    public function run()
    {
        Deduction::create([
            'name' => 'BPJS',
            'amount' => 100000,
            'description' => 'Potongan BPJS'
        ]);

        Deduction::create([
            'name' => 'Absen',
            'amount' => 50000,
            'description' => 'Potongan absen'
        ]);
    }
}
