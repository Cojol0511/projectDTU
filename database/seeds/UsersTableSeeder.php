<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $faker = Faker\Factory::create();
        for($i = 0; $i < 10; $i++){
            User::insert([
                'name' => $faker->lastName,
                //'gender' => rand(0,1),
                'email' => $faker->freeEmail,
                //'address' => $faker->streetAddress,
                //'phone_number' => $faker->tollFreePhoneNumber,
                'password' => bcrypt('123456'),
                //'level'=> 2
            ]);
        }
    }
}
