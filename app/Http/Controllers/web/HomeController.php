<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(Request $request){
        $user_name = $request->session()->get('user_name');
        $user_type = $request->session()->get('user_type');
        $data = array('user_name'=>$user_name,'user_type'=>$user_type, 'title' => "Home");
        return view('home')->with($data);
    }
}
