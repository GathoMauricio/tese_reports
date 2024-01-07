<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seccion;
use App\Models\Reporte;

class DocumetacionController extends Controller
{
    public function index()
    {
        $secciones = Seccion::all();
        $reportes = Reporte::orderBy('seccion_id')->get();
        return view('documentacion.index', compact('secciones', 'reportes'));
    }
}
