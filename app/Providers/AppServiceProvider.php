<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Info;
use App\Social;
use Jenssegers\Agent\Agent;

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
        $data->url->{'font'} = $assetUrl."fonts/";  
        
        //Setting path to admin assets directories
        $data->{'adminUrl'} = new \stdClass();        
        $adminAssetUrl = app('url')->asset('/').'admin-assets/';        
        $data->adminUrl->{'assets'} = $adminAssetUrl;
        $data->adminUrl->{'img'} = $adminAssetUrl."img/";
        $data->adminUrl->{'js'} = $adminAssetUrl."javascripts/";
        $data->adminUrl->{'css'} = $adminAssetUrl."stylesheets/";  
        $data->adminUrl->{'font'} = $adminAssetUrl."fonts/";  
        
        //Global information

        $info=new \stdClass();
        try{
            $infoQuery = Info::all();
            foreach ($infoQuery as $value) {
                $info->{''.$value->name} = $value->value;
            }       
            $data->{'info'} = $info;  
        } catch (\Illuminate\Database\QueryException $e){}


        //Social information
        $social=new \stdClass();
        try{
            $socialQuery = Social::all();
            foreach ($socialQuery as $value) {
                $social->{''.$value->name} = $value;
            }       
            $data->{'social'} = $social;
        } catch (\Illuminate\Database\QueryException $e){}
        

        //User agent
        $ua = new Agent();
        $agent=new \stdClass();
        $agent->{'mobile'} = $ua->isMobile();
        $agent->{'tablet'} = $ua->isTablet();
        $agent->{'desktop'} = $ua->isDesktop();
        $data->{'agent'} = $agent;

        
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
