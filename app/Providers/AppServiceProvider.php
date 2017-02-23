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
            $breakfastItems = \App\Item::getItems('breakfast');
            $lunchItems = \App\Item::getItems('lunch');
            $smoothies = \App\Item::getItems('smoothies');
            $drinks = \App\Item::getItems('drinks');
            $view->with(compact('featuredItems', 'smoothies', 'lunchItems', 'breakfastItems', 'drinks'));
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
