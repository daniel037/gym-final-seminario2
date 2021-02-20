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

    public function postNewRutina(Request $request)
    {
        $r = new Rutina;
        $r-> nombre = $request->nombre;
        $r-> descripcion = $request->descripcion;
        $r-> tipo = $request->tipo;
        $r-> nombre_ej1 = $request->nombre_ej1;
        $r-> descrpcion_ej1 = $request->descrpcion_ej1;
        $r-> video_ej1 = $request->video_ej1;
        $r-> nombre_ej2 = $request->nombre_ej2;
        $r-> descrpcion_ej2 = $request->descrpcion_ej2;
        $r-> video_ej2 = $request->video_ej2;
        $r-> nombre_ej3 = $request->nombre_ej3;
        $r-> descrpcion_ej3 = $request->descrpcion_ej3;
        $r-> video_ej3 = $request->video_ej3;
        $r-> save();

        return redirect() -> action([RutinaController::class, 'getRutinaList']);
    }



    public function getEditRutina($id)
    {
        $rutinas = Rutina::findOrFail($id);
        return view('admin.editRutina',compact('rutinas'));
    }

    public function putEditRutina(Request $request, $id)
    {
        $r = Rutina::find($id);
        $r-> nombre = $request->nombre;
        $r-> descripcion = $request->descripcion;
        $r-> tipo = $request->tipo;
        $r-> nombre_ej1 = $request->nombre_ej1;
        $r-> descrpcion_ej1 = $request->descrpcion_ej1;
        $r-> video_ej1 = $request->video_ej1;
        $r-> nombre_ej2 = $request->nombre_ej2;
        $r-> descrpcion_ej2 = $request->descrpcion_ej2;
        $r-> video_ej2 = $request->video_ej2;
        $r-> nombre_ej3 = $request->nombre_ej3;
        $r-> descrpcion_ej3 = $request->descrpcion_ej3;
        $r-> video_ej3 = $request->video_ej3;
        $r-> save();

        return redirect() -> action([RutinaController::class, 'getRutinaList']);
    }





    public function getRutina($id)
    {
        $rutinas = Rutina::findOrFail($id);
        return view('mostrarRutina', compact('rutinas'));
    }

}
