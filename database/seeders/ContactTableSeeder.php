<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact = Contact::create([
            'name' => 'Alireza',
            'subject' => 'Project',
            'email' => 'alireza@gmail.com',
            'message' => 'First Contact Message'
        ]);
    }
}
