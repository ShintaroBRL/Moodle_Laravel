<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        if ($request->session()->has('user_name')) {
            $user_name = $request->session()->get('user_name');
            $user_type = $request->session()->get('user_type');
            $data = array('user_name'=>$user_name,'user_type'=>$user_type);
            return view('home')->with($data);
        }
        return redirect('/');
    }
}
