<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Faker\Generator;


class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\City::class, 50)->create();

    }
}
