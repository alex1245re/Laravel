<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = "Aquí irían los servicios";
        return view('servicios.index', compact('servicios'));
    }
}
