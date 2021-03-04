<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{
    use HasFactory;
    protected $fillable = ['turma_id','usuario_id'];
    protected $hidden = ['created_at', 'updated_at'];
}
