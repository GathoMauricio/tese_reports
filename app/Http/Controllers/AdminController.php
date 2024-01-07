<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where('rol_id', 1)->paginate(10);
        return view('administrador.index', compact('admins'));
    }

    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('administrador.edit', compact('admin'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_usuario' => 'required',
            'apaterno_usuario' => 'required',
            'amaterno_usuario' => 'required',
        ], [
            'nombre_usuario.required' => 'Campo obligatorio.',
            'apaterno_usuario.required' => 'Campo obligatorio.',
            'amaterno_usuario.required' => 'Campo obligatorio.',
        ]);
        $asesor = User::findOrFail($id);
        if ($asesor->update($request->all())) {

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
        $asesor = User::findOrFail($id);
        $asesor->password = bcrypt($request->password);
        if ($asesor->save()) {

            return redirect()->back()->with('success_message', 'El Registro se actualizó correctamente');
        } else {
            return redirect()->back()->with('fail_message', 'Ocurrió un error durante el proceso');
        }
    }

    public function destroy($id)
    {
        $asesor = User::findOrFail($id);
        if ($asesor->delete()) {
            return redirect()->back()->with('success_message', 'El Registro se eliminó correctamente');
        } else {
            return redirect()->back()->with('fail_message', 'Ocurrió un error durante el proceso');
        }
    }
}
