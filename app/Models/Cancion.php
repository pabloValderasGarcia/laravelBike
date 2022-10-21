<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    use HasFactory;
    
    protected $name = "cancion";
    public $table = "cancion";
    protected $fillable = ['titulo', 'interprete', 'autor', 'duracion', 'genero', 'album', 'orden', 'fechaPublicacion'];
}
