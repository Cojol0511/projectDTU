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

        $list_typeProducts =  array(
            "Đồ uống",
            "Trái cây",
            "Đồ khô",
            "Rau củ"
        );
        foreach($list_typeProducts as $typeProduct){
            Type_product::insert([
                'name' => $typeProduct,
                'description' => $faker->realText(50),
                'image' => str_random(10)
            ]);
        }
    }
}
