<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Cache;
use App\Slider;

class SliderServiceProvider extends ServiceProvider
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
        View::composer('layouts.slider', function($view) {

            if (Cache::has('sliders')) {
                $sliders = Cache::get('sliders');
            } else {
                $sliders = Slider::all();
                Cache::put('sliders', $sliders, 3600);
            }

            $view->with([
                'sliders' => $sliders,
            ]);

        });
    }
}
