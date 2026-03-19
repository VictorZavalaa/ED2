<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    //Indicar los campos que el usuario puede modificar

    protected $fillable = ['modelo', 'fabricante', 'capacidadPasa', 'capacidadCarg', 'anioFabr'];
}
