<?php

use App\Bill_detail;
use Illuminate\Database\Seeder;

class BillDetailsTableSeeder extends Seeder
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
            Bill_detail::insert([
                'id_bill' => random_int(1,10),
                'id_product' => random_int(1,10),
                'quantily' => random_int(1,5),
                'unit_price' => random_int(1000,1000000),
            ]);
        }
    }
}
