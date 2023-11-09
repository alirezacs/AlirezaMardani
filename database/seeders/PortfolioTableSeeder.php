<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $portfolio = Portfolio::create([
            'title' => 'Shop',
            'image' => 'Test',
            'technology' => 'web development',
            'link' => 'https://google.com',
            'description' => 'shop description',
            'is_active' => true
        ]);

    }
}
