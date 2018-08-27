<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer('home', function($view) {
			$items = \App\Item::get();
			$types = \App\Type::get();
			$view->with(compact('items', 'types'));
		});

		view()->composer('diner', function($view) {
			$featuredItems = \App\Item::featuredItems();

			$types = \App\Type::get();
			$types = $types->sortBy('order');
			
			$menuItems = [];
			foreach ($types as $t => $type) {
				$menuItems[$t] = \App\Item::getItems($type->slug);
				$menuItems[$t]->typeName = $type->name;

			}

			$view->with(compact('featuredItems', 'menuItems'));
		});

	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
