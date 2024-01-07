<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seccion;
use App\Models\Reporte;
use Auth;

class AlumnoController extends Controller
{
    public function show($id)
    {
        $alumno = User::findOrFail($id);
        if (Auth::user()->id != $alumno->asesor_tese_id) {
            return abort(401);
        }
        $secciones = Seccion::all();
        $reportes = Reporte::orderBy('seccion_id')->get();
        return view('alumno.show', compact('alumno', 'secciones', 'reportes'));
    }

    public function updatePassword(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);
        $asesor = User::findOrFail($id);
        $asesor->password = bcrypt($request->password);
        if ($asesor->save()) {

            return redirect()->back()->with('success_message', 'El Registro se actualizó correctamente');
        } else {
            return redirect()->back()->with('fail_message', 'Ocurrió un error durante el proceso');
        }
    }
}
