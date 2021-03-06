<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BillDetailsTableSeeder::class);
        $this->call(BillsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(TypeProductsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        //$this->call(RolesUserTableSeeder::class);

    }
}
