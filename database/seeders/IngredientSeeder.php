<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = ['mozzarella', 'pomodoro', 'rucola', 'salame', 'prosciutto', 'funghi', 'merluzzo'];
        foreach ($ingredients as $ingredient_value) {
            $new_ingredient = new Ingredient();
            $new_ingredient->name = $ingredient_value;
            $new_ingredient->save();
        }
    }
}
