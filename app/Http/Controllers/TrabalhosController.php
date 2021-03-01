<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabalhosController extends Controller
{
    public function list(Request $request){
        $data = array('user_name'=>'juliano','user_type'=>-1);
        return view('home')->with($data);
    }
}
