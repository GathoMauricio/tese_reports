<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reporte;
use PDF;

class ReporteController extends Controller
{
    public function generarReporte($alumno_id, $reporte_id, $codigo)
    {
        $alumno = User::findOrFail($alumno_id);
        $reporte = Reporte::findOrFail($reporte_id);

        $pdf = PDF::loadView(
            'reporte/' . $reporte->codigo_reporte,
            compact('alumno')
        );

        return $pdf->setPaper('a4', $reporte->orientacion)->stream($codigo . '.pdf');
    }

    public function update(Request $request)
    {
        $request->validate([
            'reporte_id' => 'required',
            'nombre_reporte' => 'required',
        ]);
        $reporte = Reporte::findOrFail($request->reporte_id);
        if ($reporte->update($request->all())) {
            return redirect()->back()->with('success_message', 'El Registro se actualizó correctamente');
        } else {
            return redirect()->back()->with('fail_message', 'Ocurrió un error durante el proceso');
        }
    }
}
