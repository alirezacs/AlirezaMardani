<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::create([
            'first_name' => 'Alireza',
            'last_name' => 'Mardani',
            'facebook_uri' => 'https://google.com',
            'twitter_uri' => 'https://google.com',
            'instagram_uri' => 'https://google.com',
            'age' => 19,
            'email' => 'alireza@gmail.com',
            'phone' => '09216799604',
            'address' => 'Tehran',
            'language' => 'Persian, English',
            'avatar' => 'Avatar',
            'biography' => 'My Name is Alireza, Im A Programmer',
            'password' => Hash::make('123456'),
        ]);

    }
}
