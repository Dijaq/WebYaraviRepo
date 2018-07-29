<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicidad;
use App\Label;
use App\Encuesta;
use Config;

class MainNosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function quienessomos()
    {
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
         //Publicidad Secundaria
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //Publicidad Principal
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));

        return view('maininformation.nosotros.quienessomos', compact('publicidades', 'publicidadesPrincipal','labels', 'encuesta'));
    }

    public function historia()
    {
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
         //Publicidad Secundaria
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //Publicidad Principal
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));

        return view('maininformation.nosotros.historia', compact('publicidades', 'publicidadesPrincipal', 'labels', 'encuesta'));
    }

    public function equipotrabajo()
    {
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
        //Publicidad Secundaria
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //Publicidad Principal
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
        
        return view('maininformation.nosotros.equipotrabajo', compact('publicidades', 'publicidadesPrincipal', 'labels','encuesta'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
