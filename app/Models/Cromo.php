<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cromo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'descripcion','imagen', 'estado'
    ];

    
}
