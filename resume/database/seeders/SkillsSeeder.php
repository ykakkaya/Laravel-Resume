<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skills::create([
           'name'=> 'HTML',
           'skills_percent'=> '75',
        ]);
        Skills::create([
            'name'=> 'CSS',
            'skills_percent'=> '65',
        ]);
        Skills::create([
            'name'=> 'PHP',
            'skills_percent'=> '85',
        ]);
        Skills::create([
            'name'=> 'LARAVEL',
            'skills_percent'=> '85',
        ]);
        Skills::create([
            'name'=> 'PYTHON',
            'skills_percent'=> '90',
        ]);
    }
}
