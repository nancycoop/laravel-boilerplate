<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
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
        $data->user->{'type'} = 'super';
        view()->share((array)$data);     
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('auth.contents.home');
    }
}
