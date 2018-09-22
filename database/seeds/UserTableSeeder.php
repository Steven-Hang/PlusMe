<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creates Admin User 
        DB::table('users')->insert([
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'date_of_birth' => '1990-01-01',
            'contact_number' => '0123456789',
            'email' => 'admin@plusme.com',
            'password' => bcrypt('admin'),
            'licence_number' => '0123456789',
            'is_activated' => '1',
            'terms' => '1',
            'is_admin' => '1'
        ]);

        //Generates 100 Random Users
        factory(App\User::class,100)->create();
    }
}