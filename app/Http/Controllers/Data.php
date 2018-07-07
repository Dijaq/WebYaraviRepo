<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Prioridad;
use App\Label;
use App\TipoGaleria;
use App\TipoDirectorio;

class Data extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = new User;
        $user->name = 'Karol';
        $user->lastName = 'Macetas';
        $user->email = 'karol.macetas@gmail.com';
        $user->password = bcrypt('123456');
        $user->idRole = 1;
        $user->estado = 2;
        $user->save();

        /*$user = new User;
        $user->name = 'Maria Luisa';
        $user->lastName = 'Alvarez Vera';
        $user->email = 'marlui1686@gmail.com';
        $user->password = bcrypt('123456');
        $user->idRole = 1;
        $user->estado = 2;
        $user->save();

        $user = new User;
        $user->name = 'Christian';
        $user->lastName = 'Lupaca Huamaní';
        $user->email = 'christluh@outlook.com';
        $user->password = bcrypt('123456');
        $user->idRole = 1;
        $user->estado = 2;
        $user->save();

        $user = new User;
        $user->name = 'Leslie';
        $user->lastName = 'Navinta Alfaro';
        $user->email = 'leskarenalfaro@gmail.com';
        $user->password = bcrypt('123456');
        $user->idRole = 1;
        $user->estado = 2;
        $user->save();

        $user = new User;
        $user->name = 'Rosario';
        $user->lastName = 'Alarizo';
        $user->email = 'charo_ala@yahoo.com';
        $user->password = bcrypt('123456');
        $user->idRole = 1;
        $user->estado = 2;
        $user->save();

        $user = new User;
        $user->name = 'Maria Luz';
        $user->lastName = 'Cruz Arosquipa';
        $user->email = 'Marialuz_ca@gmail.com';
        $user->password = bcrypt('123456');
        $user->idRole = 1;
        $user->estado = 2;
        $user->save();



        $role = new Role;
        $role->name = 'admin';
        $role->displayName = 'Administrador';
        $role->description = 'Encargado de administrar el sitio web';
        $role->estado = 2;
        $role->save();

        $prioridad = new Prioridad;
        $prioridad->name = 'Principal';
        $prioridad->estado = 2;
        $prioridad->save();

        $prioridad = new Prioridad;
        $prioridad->name = 'Secundaria';
        $prioridad->estado = 2;
        $prioridad->save();

        $prioridad = new Prioridad;
        $prioridad->name = 'Local';
        $prioridad->estado = 2;
        $prioridad->save();

        $prioridad = new Prioridad;
        $prioridad->name = 'Sin Prioridad';
        $prioridad->estado = 2;
        $prioridad->save();

        $label = new Label;
        $label->name = 'Politica';
        $label->color = '#690';
        $label->orden = 1;
        $label->estado = 2;
        $label->save();

        $tipoGaleria = new TipoGaleria;
        $tipoGaleria->name = 'Foto';
        $tipoGaleria->estado = 2;
        $tipoGaleria->save();

        $tipoGaleria = new TipoGaleria;
        $tipoGaleria->name = 'Galeria de Fotos';
        $tipoGaleria->estado = 2;
        $tipoGaleria->save();

        $tipoGaleria = new TipoGaleria;
        $tipoGaleria->name = 'Video';
        $tipoGaleria->estado = 2;
        $tipoGaleria->save();

        $tipoGaleria = new TipoGaleria;
        $tipoGaleria->name = 'Audio';
        $tipoGaleria->estado = 2;
        $tipoGaleria->save();

        $tipoDirectorio = new TipoDirectorio;
        $tipoDirectorio->name = 'news';
        $tipoDirectorio->displayName = 'Noticias';
        $tipoDirectorio->estado = 2;
        $tipoDirectorio->save();
        
        $tipoDirectorio = new TipoDirectorio;
        $tipoDirectorio->name = 'publicity';
        $tipoDirectorio->displayName = 'Publicidad';
        $tipoDirectorio->estado = 2;
        $tipoDirectorio->save();
        */


        return "Data cargada";
    }
}
