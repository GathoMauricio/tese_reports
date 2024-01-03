<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AsesorController extends Controller
{
    public function index()
    {
        $asesores = User::where('rol_id', 2)->get();
        return view('asesor.index', compact('asesores'));
    }
}
