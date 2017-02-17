<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
        	[
	        	'id' => '00000000-0000-0000-0000-000000000001',
	        	'slug' => 'breakfast',
	        	'name' => 'Breakfast',
	        	'description' => 'Morning goodies',
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s'),
        	],
	    	[
	        	'id' => '00000000-0000-0000-0000-000000000002',
	        	'slug' => 'smoothies',
	        	'name' => 'Smoothies',
	        	'description' => 'Smoothies to die for!',
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s'),
	    	],
	    	[
	        	'id' => '00000000-0000-0000-0000-000000000003',
	        	'slug' => 'drinks',
	        	'name' => 'Drinks',
	        	'description' => 'Coffee and what-not',
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s'),
	    	],
	    	[
	        	'id' => '00000000-0000-0000-0000-000000000004',
	        	'slug' => 'lunch',
	        	'name' => 'Lunch',
	        	'description' => 'Lunch foods',
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s'),
	    	],
        ]);
    }
}
