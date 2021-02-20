<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;
use App\Models\User;
use App\Models\Rutina;

class DatabaseSeeder extends Seeder
{


    private $arrayEstudiantes = array(
        array(
            'id' => '1085314597',
            'nombres' => 'Daniel',
            'apellidos' => 'Salazar',
            'direccion' => 'mz 51 c 9 b/chambu 2 etapa',
            'correo' => 'daniel037@hotmail.es',
            'celular' => '3023662300',
            'fotografia' => 'https://scontent.fclo1-2.fna.fbcdn.net/v/t1.0-9/135739390_5373735745973505_2709166115985840698_n.jpg?_nc_cat=102&ccb=3&_nc_sid=09cbfe&_nc_eui2=AeHrGvdR5ctpwdIP8OtxmSNlRakt5TpJPxlFqS3lOkk_GbKr3Aoq7VHfkOYNASr5wou9wUIXsVhCvyXGl0GxyFh1&_nc_ohc=Ec-3uOElhrAAX9kn98K&_nc_ht=scontent.fclo1-2.fna&oh=1291f5e08e72c2be6b78ff787847bd6d&oe=605625D2',
            'disciplina' => 'Artes Marciales Mixtas',
            'valor' => '100000',
            'fecha' => '2021/03/20',
            'estado' => true,
        ),
        array(
            'id' => '10853280000',
            'nombres' => 'Dani',
            'apellidos' => 'Herrera',
            'direccion' => 'calle 23 numero 23-3 ',
            'correo' => 'dani@hotmail.com',
            'celular' => '302000000',
            'fotografia' => 'https://scontent.fclo1-2.fna.fbcdn.net/v/t1.0-9/88116389_2617078498528473_7970219984267771904_n.jpg?_nc_cat=104&ccb=3&_nc_sid=174925&_nc_eui2=AeGF79-OHKHsGqDf7rh4otGZiN9dgyGtYaGI312DIa1hocPePXHTml_jBEQ3W31Ey35NhM082EPVxlu4WOwFp547&_nc_ohc=G82gApoBjOAAX-P_kDc&_nc_ht=scontent.fclo1-2.fna&oh=273b529c1365e95bb4c22a7a2bc5fea0&oe=6052B81C',
            'disciplina' => 'Crossfit',
            'valor' => '100000',
            'fecha' => '2021/03/20',
            'estado' => true,
        ),
        array(
            'id' => '1086000000',
            'nombres' => 'Brian',
            'apellidos' => 'Villota',
            'direccion' => 'calle 234 numero 4431-4',
            'correo' => 'brian@gmail.es',
            'celular' => '3050000000',
            'fotografia' => 'https://scontent.fclo1-2.fna.fbcdn.net/v/t1.0-9/81849347_3337240529679489_8766080370564136960_o.jpg?_nc_cat=104&ccb=3&_nc_sid=09cbfe&_nc_eui2=AeHN8zbAYRP5Gmwmjl_oTt9C4WfS9DfnAUDhZ9L0N-cBQD16M6b83c6_9u3JpKjVSBYMNg45CEDZXp0oLwjULC2p&_nc_ohc=J2JO9EVrdCIAX-vA7CD&_nc_ht=scontent.fclo1-2.fna&oh=603dfd6e6b787467842707b3c25cc49d&oe=6053D9D8',
            'disciplina' => 'Artes Marciales Mixtas',
            'valor' => '100000',
            'fecha' => '2021/01/20',
            'estado' => false,
        ),
    );


    private $arrayRutinas = array(
        array(
            'nombre' => 'kick boxing',
            'descripcion' => 'Kick Boxing para principiantes. Aprende los fundamentos de este arte marcial, guardia y postura correcta, golpes básicos de puños y golpes básicos de patadas… “Entrena duro lucha fácil”... ',
            'tipo' => 'Artes Marciales Mixtas',
            'nombre_ej1' => 'Guardia Básica',
            'descrpcion_ej1' => 'Con este ejercicio aprenderás cual es la posición básica de combate, importante para realizar una buena defensa y ejecutar golpes sólidos y fluidos.',
            'video_ej1' => 'https://www.youtube.com/embed/2TSQTHHYzvc',
            'nombre_ej2' => 'Puños Básicos',
            'descrpcion_ej2' => 'Aprende los golpes y posiciones básicas para efectuar un buen golpe de puño ',
            'video_ej2' => 'https://www.youtube.com/embed/6LSgkGv56ko',
            'nombre_ej3' => 'Patadas Básica',
            'descrpcion_ej3' => 'Aprende los golpes y posiciones básicas para efectuar un buen golpe de patada ',
            'video_ej3' => 'https://www.youtube.com/embed/Wl3arnPkeyM',
        ),
    );

    
    private function seedEstudiantes()
    {
        \DB::table('estudiantes')->delete();

        foreach($this->arrayEstudiantes as $estudiante)
        {
            $p = new Estudiante;
            $p->id = $estudiante['id'];
            $p->nombres = $estudiante['nombres'];
            $p->apellidos = $estudiante['apellidos'];
            $p->direccion = $estudiante['direccion'];
            $p->correo = $estudiante['correo'];
            $p->celular = $estudiante['celular'];
            $p->fotografia = $estudiante['fotografia'];
            $p->disciplina = $estudiante['disciplina'];
            $p->valor = $estudiante['valor'];
            $p->fecha = $estudiante['fecha'];
            $p->estado = $estudiante['estado'];
            $p->save();
        }
    }

    private function seedUsers()
    {
        \DB::table('users')->delete();

        $u = new User;
        $u -> name = 'admin';
        $u -> email = 'admin@hotmail.es';
        $u -> password = bcrypt('123456');
        $u -> save();
    }


    private function seedRutinas()
    {
        \DB::table('rutinas')->delete();

        foreach($this->arrayRutinas as $rutina)
        {
            $r = new Rutina;
            $r-> nombre = $rutina['nombre'];
            $r-> descripcion = $rutina['descripcion'];
            $r-> tipo = $rutina['tipo'];
            $r-> nombre_ej1 = $rutina['nombre_ej1'];
            $r-> descrpcion_ej1 = $rutina['descrpcion_ej1'];
            $r-> video_ej1 = $rutina['video_ej1'];
            $r-> nombre_ej2 = $rutina['nombre_ej2'];
            $r-> descrpcion_ej2 = $rutina['descrpcion_ej2'];
            $r-> video_ej2 = $rutina['video_ej2'];
            $r-> nombre_ej3 = $rutina['nombre_ej3'];
            $r-> descrpcion_ej3 = $rutina['descrpcion_ej3'];
            $r-> video_ej3 = $rutina['video_ej3'];
            $r-> save();
        }
    }



    public function run()
    {
        self::seedEstudiantes();
        //self::seedUsers();
        //self::seedRutinas();

        $this->command->info('tabla estudiantes inicializada on datos');
    }
}
