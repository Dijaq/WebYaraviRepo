<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicidad;
use App\News;
use App\Label;
use App\Empresarial;
use App\Encuesta;
use App\EstructuraNoticia;
use Config;

class MainController extends Controller
{
    function __construct()
    {
        $this->middleware('verifypage');
    }
    
    public function home()
    {
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
        $empresariales = Empresarial::all();
    	$publicidades = Publicidad::all()->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now());
        //$publicidades = Publicidad::all()->where('fechaFin','>', now());
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
        $idPublicidad = $publicidades->first()->id;
        $idEmpresarial = $empresariales->first()->id;
    	//$contentnews = News::with('contentnews')->get();
    	$contentnews = News::with('label')->with('contentnews')->get();

        $listaNoticiasLocales = News::with('label')->with('contentnews')->where('idPrioridad', Config::get('constantes.prioridad_local'))->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_noticias_local'))->get();

        $listaUltimasNoticias = News::with('label')->with('contentnews')->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_ultimas_noticias'))->get();

//        $NoticiasPorTipo =  new \stdClass();

        $listaNoticiasPorTipo = array();

        foreach($labels as $label)
        {
            $NoticiasPorTipo =  new \stdClass();
            $noticias = News::with('contentnews')->where('idLabelNews', $label->id)->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_noticias_por_label'))->get();

            $NoticiasPorTipo->labelName = $label->name;
            $NoticiasPorTipo->noticias =  $noticias;
            array_push($listaNoticiasPorTipo,  $NoticiasPorTipo);
        }

        //return json_encode($listaNoticiasPorTipo);

        $new_principal = News::with('label')->with('contentnews')->where('idPrioridad', Config::get('constantes.prioridad_principal'))->orderBy('fechaPublicacion', 'desc')->get()->first();

        $new_secundaria = News::with('label')->with('contentnews')->where('idPrioridad', Config::get('constantes.prioridad_secundaria'))->orderBy('fechaPublicacion', 'desc')->get()->first();

		return view('main_news.home', compact('publicidades', 'contentnews', 'idPublicidad', 'new_principal', 'new_secundaria', 'labels', 'empresariales', 'encuesta', 'listaUltimasNoticias', 'listaNoticiasLocales', 'listaNoticiasPorTipo', 'idEmpresarial'));
	}

    //LISTA DE NOTICIAS POR ETIQUETA
    public function show($labelName)
    {
        $tipoNoticia = Label::findOrFail($labelName);
        $tipoNoticia->name = mb_strtoupper($tipoNoticia->name);
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
        $publicidades = Publicidad::all()->where('estado', Config::get('constantes.estado_habilitado'));
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
        $idPublicidad = $publicidades->first()->id;
        //$contentnews = News::with('contentnews')->get();
        $contentnews = News::with('label')->with('contentnews')->where('idLabelNews', $labelName)->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_noticias_clasificado_label'))->get();

        $listaUltimasNoticias = News::with('label')->with('contentnews')->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_ultimas_noticias'))->get();

        return view('main_news.classified', compact('publicidades', 'contentnews', 'idPublicidad', 'new_principal', 'new_secundaria', 'labels', 'encuesta', 'tipoNoticia', 'listaUltimasNoticias'));
    }

    //DETALLE DE UNA NOTICIA EMPRESARIAL
    public function empresarialDetail($id)
    {
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
        //$empresarial = Empresarial::with('contentEmpresarial')->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion')->take(Config::get('constantes.numero_empresariales'))->get();

        $empresarial = Empresarial::with('contentEmpresarial')->where('id', $id)->get()->first();
        //return $empresarial;

        return view('main_news.empresarialdetail', compact('empresarial','labels'));
    }

}
