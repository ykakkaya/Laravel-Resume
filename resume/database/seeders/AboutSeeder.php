<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=>'yakup akkaya',
            'phone_number'=>'05301233265',
            'email'=>'info@ykakkaya.com',
            'website'=>'ykakkaya.com',
            'address'=>'Türkiye'

        ]);
    }
}
