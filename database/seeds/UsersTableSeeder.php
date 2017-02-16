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
        DB::table('users') ->insert([
        	'id' => '00000000-0000-0000-0000-000000000001',
        	'first_name' => 'Admin',
        	'last_name' => 'Istrator',
        	'username' => 'administrator',
        	'email' => 'admin@think-knot.com',
        	'password' => bcrypt('secret'),
        ]);
    }
}
