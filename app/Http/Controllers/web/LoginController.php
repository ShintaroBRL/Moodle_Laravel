<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login (Request $request) {
        if($request->session()->has('user_name')){
            return redirect('/home');
        }elseif ($request->has(['user', 'pass'])) {
            $querry = Usuarios::whereRaw("user = ? and pass = ?",[$request->user, $request->pass]);
            if ($querry->exists()) {
                $request->session()->put('user_name', $request->user);
                $request->session()->put('user_id', $querry->get()[0]->id);
                $request->session()->put('user_type', $querry->get()[0]->type);
                return redirect('/home');
            }
            return view('login')->withErrors("Usuario ou senha invalidos!");
        }
        return view('login');
    }
    
    public function logout (Request $request) {
        if($request->session()->has('user_name')){
            $request->session()->forget('user_name');
            $request->session()->forget('user_id');
            $request->session()->forget('user_type');
            $request->session()->flush();
            return redirect('/');
        }
        return redirect('/');
    }
}
