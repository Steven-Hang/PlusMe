<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Generates 100 Random Vehicles 
        factory(App\Vehicles::class,100)->create();
    }
}
