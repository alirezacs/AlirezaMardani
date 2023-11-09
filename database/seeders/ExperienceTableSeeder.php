<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $experience = Experience::create([
            'as' => 'CTO',
            'at' => 'Google',
            'started_at' => '2022/2/2',
            'ended_at' => null,
            'description' => 'CTO At Google Company',
            'present' => true,
            'is_active' => true
        ]);

    }
}
