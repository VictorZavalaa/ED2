<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    protected $fillable = ['horaSalidaTerminal', 'horaEstimadaLlegada', 'terSalida', 'terLlegada', 'ciudadSalida', 'ciudadLlegada', 'nomPiloto'];
}
