<?php

use Illuminate\Database\Seeder;

// use Bouncer;

class BouncerTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::allow('admin')->to(['manage-users']);

    	Bouncer::allow('normal');
    }
}
