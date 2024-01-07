<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataMigrater;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use App\Models\User;
use App\Models\Seccion;
use App\Models\Reporte;
use Auth;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = User::where('rol_id', 3)->paginate(10);
        return view('alumno.index', compact('alumnos'));
    }

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

    public function edit($id)
    {
        $alumno = User::findOrFail($id);
        return view('alumno.edit', compact('alumno'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_usuario' => 'required',
            'apaterno_usuario' => 'required',
            'amaterno_usuario' => 'required',
        ], [
            'nombre_usuario.required' => 'Campo requerido',
            'apaterno_usuario.required' => 'Campo requerido',
            'amaterno_usuario.required' => 'Campo requerido',
        ]);
        $alumno = User::findOrFail($id);
        if ($alumno->update($request->all())) {

            return redirect()->back()->with('success_message', 'El Registro se actualizó correctamente');
        } else {
            return redirect()->back()->with('fail_message', 'Ocurrió un error durante el proceso');
        }
    }

    public function updatePassword(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);
        $alumno = User::findOrFail($id);
        $alumno->password = bcrypt($request->password);
        if ($alumno->save()) {
            return redirect()->back()->with('success_message', 'El Registro se actualizó correctamente');
        } else {
            return redirect()->back()->with('fail_message', 'Ocurrió un error durante el proceso');
        }
    }

    public function destroy($id)
    {
        $alumno = User::findOrFail($id);
        if ($alumno->delete()) {
            return redirect()->back()->with('success_message', 'El Registro se eliminó correctamente');
        } else {
            return redirect()->back()->with('fail_message', 'Ocurrió un error durante el proceso');
        }
    }

    public function descargarPlantilla()
    {
        return response()->download(storage_path('app/public/plantilla_alumnos.xlsx'));
    }

    public function cargarPlantilla(Request $request)
    {
        $request->validate([
            'plantilla' => 'required|mimes:xlsx'
        ], [
            'plantilla.required' => 'No se ha seleccionado un archivo',
            'plantilla.mimes' => 'El formato del documento debe ser .xlsx'
        ]);
        $file = $request->file('plantilla');
        $file_name = $file->store('plantilla', 'public');
        $aux = explode('/', $file_name);

        $datos = DataMigrater::ExcelArray($aux[1], 'app/public/' . $aux[0]);
        $contador = 0;
        foreach ($datos as $fila) {
            //return dd($fila);
            $existe = User::where('email', $fila['Email'])->first();
            if (!$existe) {
                $contador++;
                User::create([
                    'rol_id' => '3',
                    'matricula_usuario' => $fila['Matricula'],
                    'nombre_usuario' => $fila['Nombre'],
                    'apaterno_usuario' => $fila['A Paterno'],
                    'amaterno_usuario' => $fila['A Materno'],
                    'email' => $fila['Email'],
                    'password' => bcrypt('12345678')
                ]);
            }
        }
        return redirect()->back()->with('success_message', 'Plantilla procesada ' . $contador . " nuevos registros");
    }
}
