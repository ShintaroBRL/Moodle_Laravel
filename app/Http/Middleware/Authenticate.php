<?php

namespace App\Http\Middleware;

use Closure;
class Authenticate{
    
    public function handle($request, Closure $next){
            if($request->header('token') == null)
                return response()->json([],401);
            $request->headers->set('token',null);
            return $next($request);
    }
}