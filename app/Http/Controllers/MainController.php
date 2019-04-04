<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicidad;
use App\News;
use App\Label;
use App\Empresarial;
use App\Encuesta;
use App\EncuestaOpciones;
use App\EstructuraNoticia;
use App\Videos;
use App\InformeEspecial;
use App\ContentInformeEspecial;
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
        $maxvalueEncuesta = EncuestaOpciones::where('idEncuesta', $encuesta->id)->max('value');
        return $maxvalueEncuesta;

        $empresariales = Empresarial::orderBy('fechaPublicacion','desc')->where('estado', Config::get('constantes.estado_habilitado'))->take(Config::get('constantes.numero_empresariales'))->get();

        //Publicidad Secundaria
    	$publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //Publicidad Principal
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //$publicidades = Publicidad::all()->where('fechaFin','>', now());
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
    	//$contentnews = News::with('contentnews')->get();
    	$contentnews = News::with('label')->with('contentnews')->get();

        $listaNoticiasLocales = News::with('label')->with('contentnews')->where('idPrioridad', Config::get('constantes.prioridad_local'))->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_noticias_local'))->get();

        //$listaUltimasNoticias = News::with('label')->with('contentnews')->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_ultimas_noticias'))->get();

        $listaUltimasNoticias = News::with('label')->with('contentnews')->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->paginate(8);
//        $NoticiasPorTipo =  new \stdClass();

        $listaNoticiasPorTipo = array();

        foreach($labels as $label)
        {
            $NoticiasPorTipo =  new \stdClass();
            $noticias = News::with('contentnews')->where('idLabelNews', $label->id)->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_noticias_por_label'))->get();

            $NoticiasPorTipo->labelName = $label->name;
            $NoticiasPorTipo->idLabel = $label->id;
            $NoticiasPorTipo->noticias =  $noticias;
            array_push($listaNoticiasPorTipo,  $NoticiasPorTipo);
        }

        //return json_encode($listaNoticiasPorTipo);

        $new_principal = News::with('label')->with('contentnews')->where('idPrioridad', Config::get('constantes.prioridad_principal'))->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->get()->first();

        //Incluir video en la sección Principal
        $video = Videos::where('estado', Config::get('constantes.estado_habilitado'))->where('finalizado', Config::get('constantes.video_nofinalizado'))->orderBy('created_at','desc')->get()->first();

        //return $video;
        $neworvideo = 1;

        if(!is_null($video))
            if($video->created_at > $new_principal->fechaPublicacion)
            {
                $new_principal = $video;
                $neworvideo = 2;
            }

        $new_secundaria = News::with('label')->with('contentnews')->where('idPrioridad', Config::get('constantes.prioridad_secundaria'))->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->get()->first();

        $informesespeciales = InformeEspecial::orderBy('fechaPublicacion','desc')->where('estado', Config::get('constantes.estado_habilitado'))->take(5)->get();

        $urlServidor = Config::get('constantes.ruta_directorio');
		return view('main_news.home', compact('publicidades','publicidadesPrincipal', 'contentnews', 'new_principal', 'new_secundaria', 'labels', 'empresariales', 'encuesta', 'listaUltimasNoticias', 'listaNoticiasLocales', 'listaNoticiasPorTipo', 'urlServidor','maxvalueEncuesta','neworvideo','informesespeciales'));
	}

    //LISTA DE NOTICIAS POR ETIQUETA CLASSIFIED
    public function show($labelName)
    {
        $tipoNoticia = Label::findOrFail($labelName);
        $tipoNoticia->name = mb_strtoupper($tipoNoticia->name);
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
         //Publicidad Secundaria
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //Publicidad Principal
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));

        //$contentnews = News::with('contentnews')->get();
        $contentnews = News::with('label')->with('contentnews')->where('idLabelNews', $labelName)->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->paginate(Config::get('constantes.numero_noticias_clasificado_label'));

        $listaUltimasNoticias = News::with('label')->with('contentnews')->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_ultimas_noticias'))->get();
        $urlServidor = Config::get('constantes.ruta_directorio');

        return view('main_news.classified', compact('publicidades', 'publicidadesPrincipal','contentnews', 'new_principal', 'new_secundaria', 'labels', 'encuesta', 'tipoNoticia', 'listaUltimasNoticias', 'urlServidor'));
    }

    //LISTA DE NOTICIAS POR DE ACTUALIDAD
    public function actualidadshow($idPrioridad)
    {
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
         //Publicidad Secundaria
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //Publicidad Principal
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));

        //$contentnews = News::with('contentnews')->get();
        $contentnews = News::with('label')->with('contentnews')->where('idPrioridad', $idPrioridad)->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->paginate(Config::get('constantes.numero_noticias_clasificado_label'));

        $listaUltimasNoticias = News::with('label')->with('contentnews')->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_ultimas_noticias'))->get();
        $urlServidor = Config::get('constantes.ruta_directorio');

        return view('main_news.classifiedActualidad', compact('publicidades', 'publicidadesPrincipal','contentnews', 'new_principal', 'new_secundaria', 'labels', 'encuesta', 'listaUltimasNoticias', 'urlServidor'));
    }

    //DETALLE DE UNA NOTICIA EMPRESARIAL
    public function empresarialDetail($titleUrl)
    {
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
        //$empresarial = Empresarial::with('contentEmpresarial')->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion')->take(Config::get('constantes.numero_empresariales'))->get();

        $empresarial = Empresarial::with('contentEmpresarial')->where('titleUrl', $titleUrl)->get()->first();
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        //return $empresarial;
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
        $maxvalueEncuesta = EncuestaOpciones::where('idEncuesta', $encuesta->id)->max('value');
        $urlServidor = Config::get('constantes.ruta_directorio');

        $detailNavegador =  new \stdClass();
        $detailNavegador->title = $empresarial->title;
        $detailNavegador->keywords = "keywords";
        $detailNavegador->summary = $empresarial->summary;
        $detailNavegador->dirUrl = $urlServidor.'/empresariales/'.$empresarial->titleUrl;
        $detailNavegador->dirImage = $empresarial->dirImagePortada;

        return view('main_news.empresarialdetail', compact('empresarial','labels','publicidadesPrincipal','publicidades','encuesta','maxvalueEncuesta','urlServidor','detailNavegador'));
    }

     //DETALLE DE UN INFORME ESPECIAL
    public function informeEspecialDetail($titleUrl)
    {
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));
        //$empresarial = Empresarial::with('contentEmpresarial')->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion')->take(Config::get('constantes.numero_empresariales'))->get();

        $detailnew = InformeEspecial::with('contentInformeEspecial')->get()->where('titleUrl', $titleUrl)->first();

        //return $empresarial;
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
        $maxvalueEncuesta = EncuestaOpciones::where('idEncuesta', $encuesta->id)->max('value');
        $urlServidor = Config::get('constantes.ruta_directorio');

        $detailNavegador =  new \stdClass();
        $detailNavegador->title = $detailnew->title;
        $detailNavegador->keywords = "keywords";
        $detailNavegador->summary = $detailnew->summary;
        $detailNavegador->dirUrl = $urlServidor.'/informesespeciales/'.$detailnew->titleUrl;
        $detailNavegador->dirImage = $detailnew->dirImagePortada;

        return view('main_news.informeespecialdetail', compact('detailnew','labels','publicidadesPrincipal','publicidades','encuesta','maxvalueEncuesta','urlServidor','detailNavegador'));
    }

    public function votoStore($id, Request $request)
    {
        $encuesta = EncuestaOpciones::findOrFail($request->input('opcion'));
        $encuesta->value += 1;
        $encuesta->update(); 
        return redirect()->route('home')->with('info', 'Gracias por votar.');
    }

    public function classifiedempresarial()
    {
        $tipoNoticia = "EMPRESARIALES";
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
         //Publicidad Secundaria
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //Publicidad Principal
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));

        //$contentnews = News::with('contentnews')->get();
        $empresariales = Empresarial::where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->paginate(Config::get('constantes.numero_noticias_clasificado_label'));

        $listaUltimasNoticias = News::with('label')->with('contentnews')->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_ultimas_noticias'))->get();
        $urlServidor = Config::get('constantes.ruta_directorio');

        return view('main_news.classifiedempresarial', compact('publicidades', 'publicidadesPrincipal','empresariales', 'new_principal', 'new_secundaria', 'labels', 'encuesta', 'tipoNoticia', 'listaUltimasNoticias', 'urlServidor'));
    }

    public function classifiedinformesespeciales()
    {
        $tipoNoticia = "INFORMES ESPECIALES";
        $encuesta = Encuesta::with('encuestaOpciones')->orderBy('created_at','desc')->get()->first();
         //Publicidad Secundaria
        $publicidades = Publicidad::where('idDistribucionPublicidad', 2)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();

        //Publicidad Principal
        $publicidadesPrincipal = Publicidad::where('idDistribucionPublicidad', 1)->where('estado', Config::get('constantes.estado_habilitado'))->where('fechaFin','>', now())->get();
        $labels = Label::all()->where('estado', Config::get('constantes.estado_habilitado'));

        //$contentnews = News::with('contentnews')->get();
        $informesespeciales = InformeEspecial::where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->paginate(Config::get('constantes.numero_noticias_clasificado_label'));

        $listaUltimasNoticias = News::with('label')->with('contentnews')->where('estado', Config::get('constantes.estado_habilitado'))->orderBy('fechaPublicacion', 'desc')->take(Config::get('constantes.numero_ultimas_noticias'))->get();
        $urlServidor = Config::get('constantes.ruta_directorio');

        return view('main_news.classifiedinformesespeciales', compact('publicidades', 'publicidadesPrincipal','informesespeciales', 'new_principal', 'new_secundaria', 'labels', 'encuesta', 'tipoNoticia', 'listaUltimasNoticias', 'urlServidor'));
    }

}
