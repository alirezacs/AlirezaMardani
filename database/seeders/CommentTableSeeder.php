<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comment = Comment::create([
            'name' => 'Alireza',
            'avatar' => 'First Comment Avatar',
            'description' => 'First Comment Desc',
            'position' => 'Developer',
            'is_active' => true
        ]);
    }
}
