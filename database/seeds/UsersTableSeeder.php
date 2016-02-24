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
        		'name' => 'Admin Siskom',
        		'username' => 'adminsiskom',
        		'email' => 'adminsiskom@siskom.untan.ac.id',
        		'password' => bcrypt('awesome')
        	]);
    }
}
