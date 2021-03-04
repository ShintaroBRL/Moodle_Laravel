<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateWEB
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->session()->has('user_name')){
            
            $user_type = $request->session()->get('user_type');
            $user_type = ($user_type == "-1")? "admin" : (($user_type == "0")? "aluno" : "professor") ;
            if($role == "all" or $user_type == $role or $user_type == "admin")
                return $next($request);
            else
                return redirect('/home')->withErrors("Você não tem autorização para acessar esse conteudo!");
        }else{
            return redirect('/')->withErrors("Efetue login para acessar essa pagina!");
        }
    }
}
