<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
use App\Prioridad;
use App\Publicidad;
use App\Label;
use App\Encuesta;
use Config;

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

    public function publicindex()
    {
        $videos = Videos::orderBy('created_at','desc')->get();
        $tipo_go_publicidad = 'HOME';

        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
        //Publicidad Secundaria
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //Publicidad Principal
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
        return view('videos.publicindex', compact('videos','publicidades', 'publicidadesPrincipal', 'labels','encuesta', 'tipo_go_publicidad'));
    }

    public function nuestros_heroes_index()
    {
        $videos = Videos::where('idTipo', 2)->orderBy('created_at','desc')->get();
        $tipo_go_publicidad = 'HOME';

        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
        //Publicidad Secundaria
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //Publicidad Principal
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
        return view('videos.nuestros_heroes', compact('videos','publicidades', 'publicidadesPrincipal', 'labels','encuesta', 'tipo_go_publicidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prioridades = Prioridad::take(1)->get();
        $tipos = collect([
            ['id' => 1, 'nombre' => 'GENERAL'],
            ['id' => 2, 'nombre' => 'NUESTROS HÉROES'],
        ]);
        return view('videos.create', compact('prioridades', 'tipos'));
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
        $video->idTipo = $request->input('tipo');
        $video->embebedVideo = $request->input('contenido');
        $video->finalizado = 1;
        $video->estado = Config::get('constantes.estado_habilitado');
        $video->fechaPublicacion = now();
        //return $video;
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
         $tipos = collect([
            ['id' => 1, 'nombre' => 'GENERAL'],
            ['id' => 2, 'nombre' => 'NUESTROS HÉROES'],
        ]);

        $video = Videos::findOrFail($id);
        $prioridades = Prioridad::take(1)->get();
        return view('videos.edit', compact('video','prioridades', 'tipos'));
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
        $video->idTipo = $request->input('tipo');
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
