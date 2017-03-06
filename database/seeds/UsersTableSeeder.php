<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

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
			'id' => Uuid::generate()->string,
			'first_name' => 'Admin',
			'last_name' => 'Istrator',
			'username' => 'administrator',
			'email' => 'admin@think-knot.com',
			'role' => 'admin',
			'password' => bcrypt('secret'),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);
	}
}
