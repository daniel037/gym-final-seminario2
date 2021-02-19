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
