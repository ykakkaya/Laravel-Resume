<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'start_edu'=>'2013-09-01',
            'end_edu'=>'2017-07-19',
            'school_name'=>'NMKAL',
            'school_description'=>'YABANCI DİL AĞIRLIKLI ANADOLU LİSESİ'
        ]);
        Education::create([
            'start_edu'=>'2018-09-05',
            'end_edu'=>'2022-07-15',
            'school_name'=>'ÜNİVERSİTE',
            'school_description'=>'YAZILIM -BİLGİSAYAR BİLİMLERİ'
        ]);

    }
}
