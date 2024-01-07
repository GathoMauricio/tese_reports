<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $table = 'secciones';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'nombre_seccion',
        'fecha_inicio',
        'fecha_fin',
    ];

    function reportes()
    {
        return $this->hasMany('App\Models\Reporte', 'reporte_id');
    }
}
