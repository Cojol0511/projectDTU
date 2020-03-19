<?php

use App\Type_product;
use Illuminate\Database\Seeder;

class TypeProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for($i = 0; $i < 10; $i++){
            Type_product::insert([
                'name' => $faker->name(),
                'description' => $faker->realText(50),
                'image' => str_random(10)
            ]);
        }
    }
}
