<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seccion;
use App\Models\Reporte;
use App\Models\User;
use Auth;


class HomeController extends Controller
{
    public function index()
    {
        if (auth()->check()) {

            switch (Auth::user()->rol_id) {
                case 1:
                    return view('administrador.home');
                    break;
                case 2:
                    $alumnos = User::where('asesor_tese_id', Auth::user()->id)->paginate(10);
                    return view('asesor.home', compact('alumnos'));
                    break;
                case 3:
                    $secciones = Seccion::all();
                    $reportes = Reporte::orderBy('seccion_id')->get();
                    return view('alumno.home', compact('secciones', 'reportes'));
                    break;
            }
        } else {
            return view('auth.login');
        }
    }
}
