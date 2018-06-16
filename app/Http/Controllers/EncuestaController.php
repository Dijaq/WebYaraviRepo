<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuesta;
use App\EncuestaOpciones;
use Config;
use App\Http\Requests\CreateEncuestaRequest;

class EncuestaController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas = Encuesta::all();
        return view('encuestas.index', compact('encuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEncuestaRequest $request)
    {
        $encuesta = new Encuesta;
        $encuesta->name = $request->input('name');
        $encuesta->fechaInicio = $request->input('fechaInicio');
        $encuesta->fechaFin = $request->input('fechaFin');
        $encuesta->estado = Config::get('constantes.estado_habilitado');
        $encuesta->save();
        for($i = 1; $i<=$request->input('numeroOpciones'); $i++)
        {
            $encuestaOpcion = new EncuestaOpciones;
            $encuestaOpcion->idEncuesta = $encuesta->id; 
            $encuestaOpcion->nameOption = $request->input('Opcion'.$i);
            $encuestaOpcion->value = 0;
            $encuestaOpcion->estado = Config::get('constantes.estado_habilitado');
            $encuestaOpcion->save();
        }

        return redirect()->route('encuesta.index')->with('info', 'Se creo la etiqueta correctamente');

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
        $encuesta = Encuesta::findOrFail($id);
        $encuesta->fechaInicio =  date("Y-m-d", strtotime($encuesta->fechaInicio));
        $encuesta->fechaFin =  date("Y-m-d", strtotime($encuesta->fechaFin));
        return view('encuestas.edit', compact('encuesta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateEncuestaRequest $request, $id)
    {
        $encuesta = Encuesta::findOrFail($id);
        $encuesta->name = $request->input('name');
        $encuesta->fechaInicio = $request->input('fechaInicio');
        $encuesta->fechaFin = $request->input('fechaFin');

        $encuesta->update();

        return redirect()->route('encuesta.index');
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

    public function deshabilitar($id)
    {
        $encuesta = Encuesta::findOrFail($id);
        $encuesta->estado = Config::get('constantes.estado_deshabilitado');
        $encuesta->update();

        return redirect()->route('encuesta.index');
    }

    public function habilitar($id)
    {
        $encuesta = Encuesta::findOrFail($id);
        $encuesta->estado = Config::get('constantes.estado_habilitado');
        $encuesta->update();

        return redirect()->route('encuesta.index');
    }

    public function votoStore($id, Request $request)
    {
        $encuesta = EncuestaOpciones::findOrFail($request->input('opcion'));
        $encuesta->value += 1;
        $encuesta->update(); 
        return redirect()->route('home')->with('info', 'Gracias por votar.');
    }
}
