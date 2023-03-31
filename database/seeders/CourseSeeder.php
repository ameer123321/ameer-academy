<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 3 ; $i++){
            for ($j=1; $i <= 6 ; $j++){
                course::create([
                    'cat_id' => $i,
                    'trainer_id' => rand(1,5),
                    'name' => "course num $j cat num $j",
                    'small_desc' => " We are advised not to judge others by their social ranks, whether high or low",
                    'desc' => "We are advised not to judge others by their social ranks, whether high or low, but their characters and deeds. Our society consists of various members. There are the ministers, judges, the doctors, the teachers, the businessmen and so on. As long as these do their tasks properly and efficiently, the society will be progressive. So , their real value depends on the services they offer to their nation, and simply win respect and honor not as he holds a high post, but he is devoted to his country and is ready to struggle hard for its welfare. A doctor is not better than a farmer since both are necessary to the society. What makes us prefer one to the other is his behavior.",
                    'price' => rand(1000,5000),
                    'img' => "$i$j.jpg",
                ]);
            }
        }
    }
}
