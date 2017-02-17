<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
        	[
        		'id' => Uuid::generate()->string,
        		'type_id' => '00000000-0000-0000-0000-000000000003',
        		'name' => 'Espresso/Colada',
        		'slug' => 'espresso-colada',
        		'description' => 'Espresso/Colada',
        		'price' => 1.50,
        		'featured' => false,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
        		'id' => Uuid::generate()->string,
        		'type_id' => '00000000-0000-0000-0000-000000000003',
        		'name' => 'Coffee, Milk & Sugar/Cafe con leche',
        		'slug' => 'coffee-milk-sugar',
        		'description' => 'Coffe Milk and Sugar',
        		'price' => 2.00,
        		'featured' => false,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
        		'id' => Uuid::generate()->string,
        		'type_id' => '00000000-0000-0000-0000-000000000001',
        		'name' => '2 Egg Breakfast',
        		'slug' => 'egg-breakfast',
        		'description' => '2 Egg Breakfast with Sausage or Bacon and Potatoes and Toast',
        		'price' => 4.00,
        		'featured' => false,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
        		'id' => Uuid::generate()->string,
        		'type_id' => '00000000-0000-0000-0000-000000000001',
        		'name' => '2 Egg Breakfast Combo',
        		'slug' => 'egg-breakfast-combo',
        		'description' => '2 Egg Breakfast Combo',
        		'price' => 5.00,
        		'featured' => false,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
        		'id' => Uuid::generate()->string,
        		'type_id' => '00000000-0000-0000-0000-000000000001',
        		'name' => 'Breakfast Sandwich or Wrap',
        		'slug' => 'breakfast-sandwich-or-wrap',
        		'description' => 'Breakfast Sandwich or Wrap',
        		'price' => 4.00,
        		'featured' => false,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
        		'id' => Uuid::generate()->string,
        		'type_id' => '00000000-0000-0000-0000-000000000002',
        		'name' => 'Small Green Apple & Kale',
        		'slug' => 'small-green-apple-kale',
        		'description' => 'Small Green Apple & Kale Smoothie',
        		'price' => 2.95,
        		'featured' => false,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
        		'id' => Uuid::generate()->string,
        		'type_id' => '00000000-0000-0000-0000-000000000002',
        		'name' => 'Small Papya',
        		'slug' => 'small-papya',
        		'description' => 'Small Papya Smoothie',
        		'price' => 2.95,
        		'featured' => false,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
        		'id' => Uuid::generate()->string,
        		'type_id' => '00000000-0000-0000-0000-000000000002',
        		'name' => 'Small RX Smoothies',
        		'slug' => 'small-rx-smoothies',
        		'description' => 'Seasonal Fruits & Veggies',
        		'price' => 2.95,
        		'featured' => false,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
        		'id' => Uuid::generate()->string,
        		'type_id' => '00000000-0000-0000-0000-000000000004',
        		'name' => 'Philly Cheese Steak',
        		'slug' => 'philly-cheese-steak',
        		'description' => 'Philly Cheese Steak',
        		'price' => 6.00,
        		'featured' => false,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
        		'id' => Uuid::generate()->string,
        		'type_id' => '00000000-0000-0000-0000-000000000004',
        		'name' => 'Philly Cheese Steak Wrap',
        		'slug' => 'philly-cheese-steak-wrap',
        		'description' => 'Philly Cheese Steak Wrap',
        		'price' => 6.00,
        		'featured' => false,
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	],
        ]);
    }
}
