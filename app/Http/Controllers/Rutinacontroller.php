<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rutina;

class Rutinacontroller extends Controller
{
    public function getRutinaList()
    {
        $rutinas = Rutina::all();
        return view('rutinas', compact('rutinas'));
    }

    public function getNewRutina()
    {
        return view('admin.newRutina');
    }

    public function getEditRutina()
    {
        return view('admin.editRutina');
    }

    public function getRutina($id)
    {
        $rutinas = Rutina::findOrFail($id);
        return view('mostrarRutina', compact('rutinas'));
    }

}
