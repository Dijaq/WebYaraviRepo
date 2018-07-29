<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicidad;
use App\Label;
use App\Encuesta;
use Config;

class GeneralInformationController extends Controller
{
    public function planesdegobierno2018()
    {
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
        $publicidades = Publicidad::all()->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now());
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
        
        return view('generalinformation.gobierno2018.index', compact('publicidades','labels', 'encuesta'));
    }
}
