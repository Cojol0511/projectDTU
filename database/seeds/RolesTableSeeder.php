<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list_Roles =  array(
            "Admin",
            "Seller",
            "Buyer"
        );
        foreach($list_Roles as $list_Role){
            Role::insert([
                'name' => $list_Role
            ]);
        }
    }
}
