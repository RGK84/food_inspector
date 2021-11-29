<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert($this->getRecipes());
    }
    public function getRecipes()
    {
        $recipes = [
            11 => [
                ['Яичница', '/images/products/product-2-2.jpg']
            ]
        ];
        $data = [];

        foreach ($recipes as $key => $category) {
            for ($i = 0; $i < count($category); $i++) {
                $data[] = [
                    'category_id' => $key,
                    'name' => $category[$i][0],
                    'img' => $category[$i][1],
                    'author' => 1,
                    'cooking_time' => 15,
                    'cooking_level' => 'easy',
                    'weight' => 100.00,
                    'type_id' => 1,
                    'updated_at' => now(),
                    'created_at' => now()
                ];
            }
        }

        return $data;
    }
}
