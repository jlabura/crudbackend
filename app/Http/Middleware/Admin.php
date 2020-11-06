<?php

namespace App\Http\Middleware;


use Closure;
use Auth;


class Admin 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
     
     public function handle($request, Closure $next)
    {
        //da li ulogirani user ima neku rolu npr. admin pustamo ga, a ako nema vracamo na pocetnu stranicu
		if(Auth::user()->hasRole('admin')){
        //middleware ide dalje, vraca iducu sekvencu
            return $next($request);
        }
    //u suprotnom vrati ga na welcome page, primjerice ne bi smjeli imati access na nas dashboard
    return redirect()->route('contact');
    
    }


   /* public function handle($request, Closure $next)
    {
        
        $mojerole = Auth::user()->hasRole('admin');
        
        dd($mojerole);
       
    }*/


}
