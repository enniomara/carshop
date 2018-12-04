<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            [
                "id" => 1,
                "employee_id" => 2,
                "carmodel_id" => 3
            ],
            [
                "id" => 2,
                "employee_id" => 4,
                "carmodel_id" => 2
            ],
            [
                "id" => 3,
                "employee_id" => 4,
                "carmodel_id" => 4
            ],
            [
                "id" => 4,
                "employee_id" => 1,
                "carmodel_id" => 1
            ],
            [
                "id" => 5,
                "employee_id" => 3,
                "carmodel_id" => 1
            ],
            [
                "id" => 6,
                "employee_id" => 3,
                "carmodel_id" => 1
            ],
            [
                "id" => 7,
                "employee_id" => 2,
                "carmodel_id" => 2
            ],
            [
                "id" => 8,
                "employee_id" => 2,
                "carmodel_id" => 3
            ]
        ]);
    }
}
