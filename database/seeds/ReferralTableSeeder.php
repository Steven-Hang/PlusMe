<?php

use Illuminate\Database\Seeder;

class ReferralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creates Sign-Up referral Bonus Program
        DB::table('referral_programs')->insert([
            'name' => 'Sign-up Bonus',
            'uri' =>'register'
        ]);

    }
}