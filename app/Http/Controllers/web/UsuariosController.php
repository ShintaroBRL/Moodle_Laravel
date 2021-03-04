<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function home (Request $request) {
        $user_name = $request->session()->get('user_name');
        $user_type = $request->session()->get('user_type');
        
        $data = array(
            'user_name'=>$user_name,
            'user_type'=>$user_type, 
            'title' => "Usuarios",
            'users' => Usuarios::all()->sortBy('user')
        );

        return view('usuarios')->with($data);
    }
}
