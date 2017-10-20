<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

use App\Post;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {



        Blade::directive('option', function ($arguments) {

            list($name, $val) = explode(',',str_replace(['(',')',' ', "'"], '', $arguments));
            return "<script>if(!options) var options = [];options[${name}] = ${val}</script>";
        });

        Blade::directive('getAppScript', function () {
			$s = "<script src='<?php echo asset('/js/'.basename(mix('/js/manifest.js'))) ?>'></script>";
			$s .= "<script src='<?php echo asset('/js/'.basename(mix('/js/vendor.js'))) ?>'></script>";
			$s .= "<script src='<?php echo asset('/js/'.basename(mix('/js/app.js'))) ?>'></script>";
            return $s;
        });
    

        Blade::directive('getAppCss', function () {

            return "<link rel='stylesheet' href='<?php echo asset('/css/'.basename(mix('/css/app.css'))) ?>'/>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
    }
}
