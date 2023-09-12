<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'social_name'=>'facebook',
            'social_url'=>'#'
        ]);
        Contact::create([
            'social_name'=>'twitter',
            'social_url'=>'#'
        ]);
        Contact::create([
            'social_name'=>'google +',
            'social_url'=>'#'
        ]);
    }
}
