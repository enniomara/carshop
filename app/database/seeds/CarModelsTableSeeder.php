<?php

use Illuminate\Database\Seeder;

class CarModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carmodels')->insert([
            [
                "id" => 1,
                "brand" => "BMW",
                "model" => "335i",
                "price" => 200000
            ],
            [
                "id" => 2,
                "brand" => "Aston Martin",
                "model" => "Vanquish",
                "price" => 233000
            ],
            [
                "id" => 3,
                "brand" => "Toyota",
                "model" => "Prius",
                "price" => 150000
            ],
            [
                "id" => 4,
                "brand" => "Volvo",
                "model" => "240",
                "price" => 100000
            ]
        ]);
    }
}
