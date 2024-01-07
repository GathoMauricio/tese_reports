<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $table = 'reportes';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'seccion_id',
        'codigo_reporte',
        'nombre_reporte',
        'orientacion',
    ];

    function seccion()
    {
        return $this->belongsTo(
            'App\Models\Seccion',
            'seccion_id',
            'id'
        )
            ->withDefault();
    }
}
