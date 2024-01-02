<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
                    return view('asesor.home');
                    break;
                case 3:
                    return view('alumno.home');
                    break;
            }
        } else {
            return view('auth.login');
        }
    }
}
