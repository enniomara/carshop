<?php

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
        DB::table('employees')->insert([
            [
                "id" => 1,
                "name" => "Hjulia Styrén"
            ],
            [
                "id" => 2,
                "name" => "Antonia Cylinder"
            ],
            [
                "id" => 3,
                "name" => "Kalle Bromslöf"
            ],
            [
                "id" => 4,
                "name" => "Johan Sportratt"
            ]
        ]);
    }
}
