<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function auth (Request $request) {
        if ($request->has(['user', 'pass'])) {
            $querry = Usuarios::whereRaw("user = ? and pass = ?",[$request->user, $request->pass]);
            if ($querry->exists()) {
                $request->session()->put('user_name', $request->user);
                $request->session()->put('user_id', $querry->get()[0]->id);
                $request->session()->put('user_type', $querry->get()[0]->type);
                return redirect('/home');
            }
            return view('login');
        }
        return view('login');
    }
}
