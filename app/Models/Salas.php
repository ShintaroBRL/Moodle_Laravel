<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{
    use HasFactory;
    protected $fillable = ['classe_id','usuario_id','disciplina_id'];
    protected $hidden = ['created_at', 'updated_at'];
}
