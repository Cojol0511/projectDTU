<?php

use App\Role_User;
use Illuminate\Database\Seeder;

class RolesUserTableSeeder extends Seeder
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
            Role_User::insert([
                'user_id' => random_int(1,10),
                'role_id' => random_int(2,3)
            ]);
        }
    }
}
