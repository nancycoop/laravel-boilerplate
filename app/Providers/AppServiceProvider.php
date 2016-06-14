<?php

namespace App\Providers;

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
        //Creating global data
        $data = new \stdClass();

        
        //Setting path to assets directories
        $data->{'url'} = new \stdClass();
        
        $assetUrl = app('url')->asset('/').'assets/';
        
        $data->url->{'assets'} = $assetUrl;
        $data->url->{'img'} = $assetUrl."img/";
        $data->url->{'js'} = $assetUrl."javascripts/";
        $data->url->{'css'} = $assetUrl."stylesheets/";  
        
        
        $data->{'adminUrl'} = new \stdClass();
        
        $adminAssetUrl = app('url')->asset('/').'admin-assets/';
        
        $data->adminUrl->{'assets'} = $adminAssetUrl;
        $data->adminUrl->{'img'} = $adminAssetUrl."img/";
        $data->adminUrl->{'js'} = $adminAssetUrl."javascripts/";
        $data->adminUrl->{'css'} = $adminAssetUrl."stylesheets/";  
        
        
        //Share data with all views
        view()->share((array)$data);
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
