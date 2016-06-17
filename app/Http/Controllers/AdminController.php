<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;

use App\Info;
use App\Daily;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         //Creating global data
        $data = new \stdClass();
        
        //Setting path to assets directories
        $data->{'user'} = new \stdClass();   
        $data->user->{'type'} = 'admin';
        view()->share((array)$data);        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = new \stdClass();

        $data->{'daily'} = Daily::orderBy('created_at', 'DESC')->first();
        
        return view('auth.contents.home', (array)$data);
    }


    /**
    * Informations
    */
    public function getInfo()
    {
        $data = new \stdClass();

        $data->{'infos'} = Info::all();
        //var_dump($info);   

        return view('auth.contents.info',(array)$data);
    }
    public function postInfo()
    {
       $input = Request::all();

       foreach ($input as $key => $value) {
           if($key!="_token"){
                $info=Info::where('name','=', $key)->first();
                $info->value=$value;
                $info->save();
                
           }   

       }

        return redirect('/admin/info');
    }

    /**
    * Daily messages
    */
    public function postDaily()
    {
        $text=Request::input('daily');
        $daily=new Daily();
        $daily->text=$text;
        $daily->save();
        return redirect('/admin');
    }


}
