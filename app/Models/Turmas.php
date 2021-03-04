<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    use HasFactory;
    protected $fillable = ['professor_id','classe_id','disciplina_id'];
    protected $hidden = ['created_at', 'updated_at'];
}
