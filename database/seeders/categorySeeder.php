<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'techburg_feature'
       ]);

    Category::create([
        'name' => 'techburg_portfolio'
    ]);

    Category::create([
    'name' => 'techburg_about'
    ]);

    Category::create([
    'name' => 'techburg_services'
    ]);

    Category::create([
        'name' => 'techburg_team'
        ]);

        Category::create([
            'name' => 'techburg_latest_news'
            ]);
    
            Category::create([
                'name' => 'techburg_testimonials'
                ]);


                Category::create([
                    'name' => 'techburg_partener'
                    ]);
    }
}
