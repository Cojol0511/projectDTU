<?php

use App\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
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
        for ($i = 0; $i < 10; $i++) {
            Image::insert([
                'image' => '20200407032903-wqd.jpg',
                'product_id' => random_int(1, 10)
            ]);
        }
    }
}
