<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;
use Faker\Generator as Faker;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 

            $pizza = new Pizza();
            $pizza->flavour = $faker->randomElement(['Margherita', 'Capricciosa', 'Diavola', 'Boscaiola', 'prucola', 'Tonno', 'Marinara']);
            $pizza->price = $faker->randomFloat(2, 5, 15);
            $pizza->is_available = $faker->randomElement([true, false]);
            $pizza->is_vegan = $faker->randomElement([true, false]);
            $pizza->save();
        }
    }
}
