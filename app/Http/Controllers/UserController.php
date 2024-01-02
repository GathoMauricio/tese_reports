<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function configuracion()
    {
        $usuario = User::find(Auth::user()->id);
        switch (Auth::user()->rol_id) {
            case 1:
                return view('administrador.configuracion', compact('usuario'));
                break;
            case 2:
                return view('asesor.configuracion', compact('usuario'));
                break;
            case 3:
                $asesores = User::where('rol_id', 2)->get();
                return view('alumno.configuracion', compact('usuario', 'asesores'));
                break;
        }
    }

    public function updateAlumno(Request $request)
    {
        $request->validate([
            'asesor_tese_id' => 'required',
            'nombre_usuario' => 'required',
            'apaterno_usuario' => 'required',
            'amaterno_usuario' => 'required',
            'domicilio_usuario' => 'required',
            'creditos_usuario' => 'required',
            'telefono_usuario' => 'required',
            'nombre_empresa' => 'required',
            'rfc_empresa' => 'required',
            'telefono_empresa' => 'required',
            'web_empresa' => 'required',
            'giro_empresa' => 'required',
            'direccion_empresa' => 'required',
            'nombre_dirige_documentacion' => 'required',
            'cargo_dirige_documentacion' => 'required',
            'horario_residencia' => 'required',
            'nombre_proyecto' => 'required',
            //'beneficio_empresa' => 'required',
            'asesor_empresa' => 'required',
        ], [
            'asesor_tese_id.required' => 'Ingrese el asesor TESE.',
            'nombre_usuario.required' => 'Ingrese el nombre del alumno.',
            'apaterno_usuario.required' => 'Ingrese el apellido paterno del alumno.',
            'amaterno_usuario.required' => 'Ingrese el apellido materno del alumno.',
            'domicilio_usuario.required' => 'Ingrese el domicilio del alumno.',
            'creditos_usuario.required' => 'Ingrese el porcentaje de créditos cumplidos.',
            'telefono_usuario.required' => 'Ingrese el teléfono del alumno.',
            'nombre_empresa.required' => 'Ingrese el nombre de la empresa.',
            'rfc_empresa.required' => 'Ingrese el rfc de la empresa.',
            'telefono_empresa.required' => 'Ingrese el teléfono de la empresa.',
            'web_empresa.required' => 'Ingrese el sitio web de la empresa.',
            'giro_empresa.required' => 'Ingrese el giro de la empresa.',
            'direccion_empresa.required' => 'Ingrese la dirección de la empresa',
            'nombre_dirige_documentacion.required' => 'Ingrese el nombre de la persona a quien deberá dirigirse la documentación',
            'cargo_dirige_documentacion.required' => 'Ingrese el cargo de la persona a quien deberá dirigirse la documentación',
            'horario_residencia.required' => 'Ingrese el horario en que se realizará la residencia profesional',
            'nombre_proyecto.required' => 'Ingrese el nombre del proyecto.',
            'beneficio_empresa.required' => 'Ingrese el beneficio que recibirá la empresa.',
            'asesor_empresa.required' => 'Seleccione el asesor por parte de la empresa.',
        ]);
        $usuario = User::find(Auth::user()->id);
        if ($usuario->update($request->all())) {
            return response()->json([
                'status' => 'OK',
                'message' => 'Registro actualizado',
            ]);
        } else {
            return response()->json([
                'status' => 'FAIL',
                'message' => 'Error durante la petición',
            ]);
        }
    }
}
