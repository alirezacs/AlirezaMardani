<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $skill = Skill::create([
            'name' => 'HTML',
            'percent' => 70,
            'description' => 'HTML Skill',
            'is_active' => true
        ]);

    }
}
