<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Cache;
use App\Menu;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.nav', function($view) {

            if (Cache::has('parents')) {
                $parents = Cache::get('parents');
            } else {
                $parents = Menu::where('parent_id', 0)->with('children')->get();
                Cache::put('parents', $parents, 3600);
            }

            $view->with([
                'parents' => $parents,
                'childrens' => Menu::where('parent_id', '!=', 0)->with('posts')->get(),
            ]);

        });
    }
}
