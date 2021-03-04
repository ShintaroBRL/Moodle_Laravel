<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabalhos extends Model
{
    use HasFactory;
    protected $fillable = ['titulo','descricao','turma_id','created_by_user_id','data_inicio','data_fim'];
    protected $hidden = ['created_at', 'updated_at'];
}
