<?php

use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
        	'user_id' => 1,
            'title' => "قالب فروشگاهی وردپرس",
            'desc' => 'sdfsdfsdfsdfsdf',
            'cover' => '1.jpg',
            'demo_addr' => 'demo address',
            'zip_addr' => 'zip address',
        ]);

        DB::table('templates')->insert([
        	'user_id' => 1,
            'title' => "قالب تجاری",
            'desc' => 'sdfsdfsdfsdfsdf',
            'cover' => '2.jpg',
            'demo_addr' => 'demo address',
            'zip_addr' => 'zip address',
        ]);

        DB::table('templates')->insert([
        	'user_id' => 1,
            'title' => "قالب شخصی پارس",
            'desc' => 'sdfsdfsdfsdfsdf',
            'cover' => '3.jpg',
            'demo_addr' => 'demo address',
            'zip_addr' => 'zip address',
        ]);


        DB::table('templates')->insert([
            'user_id' => 1,
            'title' => "قالب شرکتی خزر",
            'desc' => 'sdfsdfsdfsdfsdf',
            'cover' => '4.jpg',
            'demo_addr' => 'demo address',
            'zip_addr' => 'zip address',
        ]);
    }
}
