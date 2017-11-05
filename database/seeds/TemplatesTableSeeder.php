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
            'tag' => "test"
        ]);

        DB::table('templates')->insert([
        	'user_id' => 1,
            'title' => " 222قالب فروشگاهی وردپرس",
            'desc' => 'sdfsdf',
            'tag' => "test2"
        ]);

        
    }
}
