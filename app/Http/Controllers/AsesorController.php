<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AsesorController extends Controller
{
    public function index()
    {
        $asesores = User::where('rol_id', 2)->paginate(10);
        return view('asesor.index', compact('asesores'));
    }
}
