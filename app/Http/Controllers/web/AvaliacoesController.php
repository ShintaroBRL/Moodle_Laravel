<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AvaliacoesController extends Controller
{
    public function list(Request $request){
        $data = array('user_name'=>'juliano','user_type'=>-1);
        return view('home')->with($data);
    }
}
