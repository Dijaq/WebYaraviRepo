<?php


//Controlador que administra el contenido de una noticia (Vista de USUARIO de UNA NOTICIA)
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\News;
use App\ContentNews;
use App\Label;
use App\Publicidad;
use Config;

class NewController extends Controller
{
    function __construct()
    {
        $this->middleware('verifypage');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name, $titleUrl)
    {
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
        $detailnew = News::with('label')->with('contentnews')->get()->where('titleUrl', $titleUrl)->first();
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //$fecha = date('l jS \of F Y h:i:s A',strtotime($detailnew->fechaPublicacion));
        //$fecha = strftime('%A, %d de %B de %Y',strtotime($detailnew->fechaPublicacion));
        $urlServidor = Config::get('constantes.ruta_directorio');
        $moreNews = News::with('contentnews')->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_noticias_relacionadas'))->where('estado', Config::get('constantes.estado_habilitado'))->where('idLabelNews', $detailnew->idLabelNews)->get();

        $urlServidorComentarios = Config::get('constantes.ruta_directorio_archivos');

        $kindGaleria = 1;
        if($detailnew->contentnews->galeria[0] == 'n') 
           $kindGaleria = 0;

       $detailNavegador =  new \stdClass();
       $detailNavegador->title = $detailnew->title;
       $detailNavegador->keywords = $detailnew->keywords;
       $detailNavegador->summary = $detailnew->summary;
       $detailNavegador->dirUrl = $urlServidor.'noticia/'.$detailnew->label->name.'/'.$detailnew->titleUrl;
       //$detailNavegador->dirImage = $detailnew->dirImagePortada;
       $detailNavegador->label = $detailnew->label->name;
       if($detailnew->label->name == 'Policial')
           $detailNavegador->dirImage =  asset('storage/'.'news/20200702-170245_logo-temporal.png');
       else
           $detailNavegador->dirImage = $detailnew->dirImagePortada;
       $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        return view('main_news.detailnew', compact('publicidades', 'detailnew', 'publicidadesPrincipal', 'contentNew', 'moreNews', 'labels', 'urlServidor','urlServidorComentarios','kindGaleria','detailNavegador'));
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
