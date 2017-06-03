<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);

        Validator::extend('youtube_url_validate', function ($attribute, $value, $parameters, $validator) {
            $rx = '~
              ^(?:https?://)?
               (?:www[.])?
               (?:youtube[.]com/embed/|youtu[.]be/)
               ([^&]{11})
                ~x';

            $has_match = preg_match($rx, $value, $matches);
            return empty($matches) ? false : true;
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
