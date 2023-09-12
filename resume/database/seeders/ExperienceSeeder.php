<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'job_start'=>'2023-01-01',
            'job_finish'=>null,
            'company_name'=>'ykakkaya',
            'job_description'=>'LARAVEL İLE YAZILIM GELİŞTİRME'

        ]);
    }
}
