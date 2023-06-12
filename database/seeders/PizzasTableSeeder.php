<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Pizza;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $pizza = new Pizza();
            $pizza->nome = $faker->randomElement(['Margherita', 'Capricciosa', 'Quattro Stagioni', 'Prosciutto Crudo']);
            $pizza->base_bianca = $faker->boolean();
            $pizza->prezzo = $faker->randomFloat(2, 1, 20);
            $pizza->save();
        }
    }
}
