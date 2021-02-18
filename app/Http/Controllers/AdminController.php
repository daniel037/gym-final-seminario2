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

    public function getEdit()
    {
        return view('admin.editClient');
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

}
