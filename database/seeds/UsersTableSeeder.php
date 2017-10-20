<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Morteza Dehghani",
            'email' => 'mrtdeh@gmail.com',
            'password' => bcrypt('123'),
            'remember_token' => str_random(10),
        ]);
    }
}
