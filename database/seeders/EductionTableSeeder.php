<?php

namespace Database\Seeders;

use App\Models\Eduction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EductionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eduction = Eduction::create([
            'title' => 'Bachelor In Azad University',
            'in' => 'Azad University',
            'degree' => 'Bachelor',
            'description' => 'i eduction in azad university',
            'is_active' => true,
            'started_at' => '2020',
            'ended_at' => '2022'
        ]);
    }
}
