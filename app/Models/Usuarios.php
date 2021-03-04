<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $fillable = ['user', 'pass', 'type', 'token'];
    protected $hidden = ['token','created_at','updated_at'];
}
