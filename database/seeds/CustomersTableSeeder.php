<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
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
            Customer::insert([
                'name' => $faker->lastName,
                'gender' => ('male'|'female'),
                'email' => $faker->freeEmail,
                'address' => $faker->streetAddress,
                'phone_number' => $faker->tollFreePhoneNumber,
            ]);
        }
    }
}
