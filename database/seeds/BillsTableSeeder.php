<?php

use App\Bill;
use Illuminate\Database\Seeder;

class BillsTableSeeder extends Seeder
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
            Bill::insert([
                'id_customer' => random_int(1,10),
                'date_order' =>  $faker->dateTimeThisCentury($max = 'now', $timezone = null),
                'total' => random_int(10000,10000000),
                'payment' => $faker->creditCardType,
            ]);
        }
    }
}
