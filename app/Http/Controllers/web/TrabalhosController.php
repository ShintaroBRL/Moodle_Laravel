<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TrabalhosController extends Controller
{
    public function home (Request $request) {

        $user_name = $request->session()->get('user_name');
        $user_type = $request->session()->get('user_type');
        $user_id = $request->session()->get('user_id');

        $trabalhos = DB::table('trabalhos')
        ->select('titulo','descricao','nome')
        ->join('turmas', 'turmas.id', '=', 'trabalhos.turma_id')
        ->join('salas', 'salas.turma_id', '=', 'turmas.id')
        ->join('usuarios', 'salas.usuario_id', '=', 'usuarios.id')
        ->join('disciplinas', 'disciplinas.id', '=', 'turmas.disciplina_id')
        ->where('usuarios.id', '=', $user_id)
        ->get();
        
        $data = array(
            'user_name'=>$user_name,
            'user_type'=>$user_type, 
            'title' => "Trabalhos",
            'trabalhos' => $trabalhos
        );

        return view('trabalhos')->with($data);
    }
}

/*
SELECT titulo,descricao,user,nome
FROM trabalhos
JOIN turmas on turmas.id = trabalhos.turma_id
JOIN salas on salas.turma_id = turmas.id
JOIN usuarios on salas.usuario_id = usuarios.id
join disciplinas on disciplinas.id = turmas.disciplina_id
WHERE usuarios.id = 50
*/
