<?php

use App\Supplier;
use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
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
            Supplier::insert([
                'name' => $faker->lastName,
                'email' => $faker->freeEmail,
                'address' => $faker->streetAddress,
                'phone_number' => $faker->tollFreePhoneNumber,
                'avatar' => str_random(10)
            ]);
        }
    }
}
