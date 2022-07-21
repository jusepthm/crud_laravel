<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='tareas';

    protected $fillable = [
    'nombre',
    'descripcion',
    'finalizada',
    'fecha_limite',
    'urgencia',
    ];
    protected $datos =['fecha_limite'];
    public const URGENCIA =['Baja','Normal','Alta'];

    public function urgencia(){
        return self::URGENCIA[$this->urgencia];
    }

    public function finalizada(){
        return $this->finalizada == 1 ? 'Si' : 'No';
    }

}
