<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('/login');
            }
        }

        //Creating access data
        $data = new \stdClass();        
        $data->{'user'} = new \stdClass();   

        if(Auth::user()->name=='admin'){            
            $data->user->{'type'} = 'super';
        }else{
            $data->user->{'type'} = 'admin';
        }
        view()->share((array)$data);  

        return $next($request);
    }
}
