<?php

namespace Database\Seeders;

use App\Models\SiteContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // SiteContent::create([
         //   'name' => 'banner',
       //     'content' => json_encode([
        //        'title' => 'Explore the world of technology or start building your career',
       //         'subtitle' => 'Learn about topics such as networking and cyber security',
       //         'desc' => 'Build your skills through job-ready programs and earn your certification to propel your career.',
       //     ]),
     //  ]);

     SiteContent::create([
        'name' => 'courses',
        'content' => json_encode([
            'title' => 'our courses',
            'subtitle' => 'different categories',
        ]),
    ]);

    }
}
