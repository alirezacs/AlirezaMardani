<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([

            // User Table
            UserTableSeeder::class,

            // Skill Table
            SkillTableSeeder::class,

            // Portfolio Table
            PortfolioTableSeeder::class,

            // Experience Table
            ExperienceTableSeeder::class,

            // Comment Table
            CommentTableSeeder::class,

            // Contact Table
            ContactTableSeeder::class,

            // Eduction Table
            EductionTableSeeder::class,
        ]);

    }
}
