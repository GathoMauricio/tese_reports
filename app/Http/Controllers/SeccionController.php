<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seccion;

class SeccionController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'seccion_id' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);
        $seccion = Seccion::findOrFail($request->seccion_id);
        if ($seccion->update($request->all())) {
            return redirect()->back()->with('success_message', 'El Registro se actualizó correctamente');
        } else {
            return redirect()->back()->with('fail_message', 'Ocurrió un error durante el proceso');
        }
    }
}
