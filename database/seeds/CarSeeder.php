<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Car::class,100)->create();
    }
}
