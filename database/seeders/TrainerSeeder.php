<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        trainer::create([
            'name' =>'kareem fouad',
            'spec' =>'web development',
            'img' =>'1.jpg'
        ]);
        trainer::create([
            'name' =>'mostafa mahfouz',
            'spec' =>'web development',
            'img' =>'2.jpg'
        ]);
        trainer::create([
            'name' =>'ameer hassan',
            'spec' =>'dentist',
            'img' =>'3.jpg'
        ]);
        trainer::create([
            'name' =>'hassan hussen',
            'spec' =>'dentist',
            'img' =>'4.jpg'
        ]);
        trainer::create([
            'name' =>'ahmad ahmad',
            'spec' =>'englich teacher',
            'img' =>'5.jpg'
        ]);
    }
}
