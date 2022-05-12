<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Faker\Factory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $categories = ['sport', 'science',  'histoire', 'politique'];

        for($i = 0; $i < count($categories); $i++){
            Category::create([
                'label' => $categories[$i]

            ]);
        }
        //
    }
}
