<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;

class Operaciones
{

 protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth=$auth;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->operaciones())
        {        
        return $next($request);
        } else{
            dd('No puedes acceder eres de tipo Seguimiento');
        }

    }


    
}
