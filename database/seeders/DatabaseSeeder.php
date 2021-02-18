<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;

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
            'estado' => false,
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
            $p->estado = $estudiante['estado'];
            $p->save();
        }
    }


    public function run()
    {
        self::seedEstudiantes();
        $this->command->info('tabla estudiantes inicializada on datos');
    }
}
