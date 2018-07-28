<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
use Config;
use App\Prioridad;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Videos::orderBy('created_at','desc')->get();
        return view('videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prioridades = Prioridad::take(1)->get();
        return view('videos.create', compact('prioridades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new Videos;
        $video->title = $request->input('titulo');
        $video->idPrioridad = $request->input('distribucion');
        $video->embebedVideo = $request->input('contenido');
        $video->finalizado = 1;
        $video->estado = Config::get('constantes.estado_habilitado');
        $video->fechaPublicacion = now();

        $video->save();

        return redirect()->route('video.index')->with('info', 'Se creo la etiqueta correctamente');
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
        $video = Videos::findOrFail($id);
        $prioridades = Prioridad::take(1)->get();
        return view('videos.edit', compact('video','prioridades'));
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
        $video = Videos::findOrFail($id);
        $video->title = $request->input('titulo');
        $video->idPrioridad = $request->input('distribucion');
        $video->embebedVideo = $request->input('contenido');
        $video->update();
        return redirect()->route('video.index');
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
        $video = Videos::findOrFail($id);
        $video->estado = Config::get('constantes.estado_deshabilitado');
        $video->update();

        return redirect()->route('video.index');
    }

    public function habilitar($id)
    {
        $video = Videos::findOrFail($id);
        $video->estado = Config::get('constantes.estado_habilitado');
        $video->update();

        return redirect()->route('video.index');
    }

     public function finalizar($id)
    {
        $video = Videos::findOrFail($id);
        $video->finalizado = Config::get('constantes.video_finalizado');
        $video->update();

        return redirect()->route('video.index');
    }

    public function desfinalizar($id)
    {
        $video = Videos::findOrFail($id);
        $video->finalizado = Config::get('constantes.video_nofinalizado');
        $video->update();

        return redirect()->route('video.index');
    }
}
