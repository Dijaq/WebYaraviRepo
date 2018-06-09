<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Prioridad;
use App\Label;

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
        $user->name = 'Diego';
        $user->email = 'dijaq089@gmail.com';
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
        $prioridad->name = 'Sin Prioridad';
        $prioridad->estado = 2;
        $prioridad->save();

        $label = new Label;
        $label->name = 'Politica';
        $label->color = '#690';
        $label->estado = 2;
        $label->save();

        return "Data cargada";
    }
}