<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class AdminController extends Controller
{
    public function getNew()
    {
        return view('admin.newClient');
    }

    public function postNew(Request $request)
    {
        $p = new Estudiante;
        $p->id = $request->id;
        $p->nombres = $request->nombres;
        $p->apellidos = $request->apellidos;
        $p->direccion = $request->direccion;
        $p->correo = $request->correo;
        $p->celular = $request->celular;
        $p->fotografia = $request->fotografia;
        $p->disciplina = $request->disciplina;
        $p->estado = true;
        $p->save();

        return redirect() -> action([AdminController::class, 'getList']);
    }


    public function getEdit($id)
    {
        $estudiantes = Estudiante::findOrFail($id);
        return view('admin.editClient', compact('estudiantes'));
    }

    public function getList()
    {
        $estudiantes = Estudiante::all();
        return view('admin.studentList', compact('estudiantes'));
    }

    public function getStudent($id)
    {
        $estudiantes = Estudiante::findOrFail($id);
        return view('admin.student', compact('estudiantes'));
    }

    public function getPago($id)
    {
        $estudiantes = Estudiante::findOrFail($id);
        return view('admin.pago', compact('estudiantes'));
    }

}
