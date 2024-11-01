<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    //protected $table = 'usuarios';
    //public $timestamps = false;
    //use HasFactory;
    
    protected $fillable = [
        'nome',
        'email',
        'password'];
        
}

