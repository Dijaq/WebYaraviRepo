<?php

//
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Label;
use App\Prioridad;
use App\User;
use App\ContentNews;
use App\TipoGaleria;
use App\Http\Requests\CreateNoticiasRequest;
use App\Http\Requests\EditNoticiasRequest;
use Config;
use Intervention\Image\ImageManager;

class AdminNewsController extends Controller
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
        $news = News::with('label')->orderBy('fechaPublicacion','dsc')->paginate(10);
       // return $news;
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labels = Label::all();
        $prioridades = Prioridad::all();
        $listUsers = User::all(); 
        /*$listUsersCompleteName = array();
        foreach($listUsers as $user)
        {
            array_push($listUsersCompleteName, $user->name.' '.$user->lastName);
        }*/
        //return $listUsersCompleteName;
        $listTipoGaleria = TipoGaleria::all();

        return view('news.create', compact('labels', 'prioridades', 'listUsers', 'listTipoGaleria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNoticiasRequest $request)
    {
        //Seccion de Guardar imagen
        $image       = $request->file('dir_image');
        $name = "";
        $nameImage = $image->getClientOriginalName();
        for($i = 0; $i<strlen($nameImage); $i++)
        {
            $vocal = ord(substr($nameImage, $i, 1));
            if(!(($vocal >= 97 && $vocal<= 122)||($vocal >= 65 && $vocal <= 90) ||($vocal >= 48 && $vocal <= 57) || $vocal == 46))
                $name .= '-';
            else
                $name .= substr($nameImage, $i, 1);
        }
        $filename    = date("Ymd-His", strtotime(now())).'_'.$name;
        $image_resize = \Image::make($image->getRealPath());
        list($width, $height) = getimagesize($image);

        if($width >= 800)
        {
            $newWidth = 800;
            $lessWidth = ($width-$newWidth)/$width;
            $newHeight = $height-$lessWidth*$height; 
            $image_resize->resize($newWidth, $newHeight);
        }

        if (!file_exists(storage_path('app/public/news/')))
        {
             //mkdir(public_path('publicity\\'), 777, true);
             return 'El directorio no existe';
        }
        //return public_path('publicity');
        $image_resize->save(storage_path('app/public/news/'. $filename));

        //$directorio = $request->file('dir_image')->store('public/publicity'); 
        $directorio = 'news/'.$filename; 
        //Fin de seccion de imagen


        //Creacion de la Noticia
        $new = new News;
        $new->title = $request->input('titulo');
        $new->titleUrl = "";
        $new->summary = $request->input('resumen');
        $new->idUser = auth()->user()->id;
        $new->idLabelNews = $request->input('label');
        $new->idPrioridad = $request->input('distribucion');
        $new->idTipoGaleria = $request->input('tipogaleria');
        $new->keywords = $request->input('palabrasclave');
        $new->dirImagePortada = $directorio;
        $user = User::findOrFail($request->input('nombreEditor'));
        $new->nameEditor = $user->name.' '.$user->lastName;
        $new->fechaPublicacion = now();
        $new->estado = Config::get('constantes.estado_habilitado');
        $new->save();

        //Creacion de ruta de la noticia
        $showTitleUrl = $request->input('titulo');
        $_showTitleUrl = "";
        $showTitleUrl = mb_strtolower($showTitleUrl);
        for($i = 0; $i<strlen($showTitleUrl); $i++)
        {
            $vocal = ord(substr($showTitleUrl, $i, 1));
            if(!(($vocal >= 97 && $vocal<= 122)||($vocal >= 48 && $vocal <= 57)))
            {
                if($vocal ==195)
                {
                    $_showTitleUrl .= substr($showTitleUrl, $i, 2); //Una vocal con tilde ocupa dos espacios
                    $i++;
                }
                else
                    $_showTitleUrl .= "-";
            }
            else
                $_showTitleUrl .= substr($showTitleUrl, $i, 1);

        }
        $_showTitleUrl .= "-".$new->id;

        $new->titleUrl = $_showTitleUrl;
        $new->update();
        //Termino de creacion de ruta de la noticia

        //Creacion del detalle de la noticia
        $contentNew = new ContentNews;

        //Tipo de Galeria
        if($new->idTipoGaleria == 1)
            $contentNew->galeria = $directorio;
        else
            if($new->idTipoGaleria == 2)//Guardar Carousel
            {
                $contentGaleria = "";
                $contentGaleriaEdit = "";

                 for($i = 1; $i<=$request->input('numeroOpciones'); $i++)
                 {
                    $frame = $request->input('fuenteFrame'.$i);
                    $contentGaleriaEdit .= $request->input('fuenteFrame'.$i).'*';

                    if($i == 1)
                    {
                      if($frame[0] == 'h')
                        $contentGaleria .= '<div class="carousel-item active"><figure class="img-responsive-carousel"><img class="d-block" src="'.$frame.'" alt="First slide"></figure></div>';
                      else
                        $contentGaleria.='<div class="carousel-item active"><div class="video-responsive">'.$frame.'</div></div>';
                    }
                    else
                    {
                      if($frame[0] == 'h')
                        $contentGaleria .= '<div class="carousel-item"><figure class="img-responsive-carousel"><img class="d-block" src="'.$frame.'" alt="First slide"></figure></div>';
                      else
                        $contentGaleria.='<div class="carousel-item"><div class="video-responsive">'.$frame.'</div></div>';
                    }
                }

                $contentNumeracion = "";
                for($i = 1; $i<=$request->input('numeroOpciones'); $i++)
                {
                    if($i != 1)
                    {
                        $contentNumeracion .= '<li data-target="#carousel-ima" data-slide-to="'.$i.'">'.$i.'</li>';
                    }
                    else
                    {
                        $contentNumeracion .= '<li data-target="#carousel-ima" data-slide-to="'.$i.'" class="active">'.$i.'</li>';
                    }
                    
                }

                $contentNumeracion = '<ol class="carousel-indicators carousel-indicators-numbers">'.$contentNumeracion.'</ol>';

                $contentGaleria = '<div class="carousel slide" id="carousel-ima" data-ride="carousel" data-interval="false">'.$contentNumeracion.'
                  <div class="carousel-inner" Id="vcarousel" style="background-color: black;">'
                    .$contentGaleria.'</div>                
                <div><a class="carousel-control-prev" href="#carousel-ima" role="button" data-slide="prev">
                    <div class="carousel-control-prev-style">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </div>
                </a></div>
                <div><a class="carousel-control-next" href="#carousel-ima" role="button" data-slide="next">
                    <div class="carousel-control-next-style">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </div>
                </a></div></div>';

                $contentNew->galeria = $contentGaleria;
                $contentNew->galeriaEdit = $contentGaleriaEdit;
            }
            else
            {
                $contentNew->galeria = $request->input('contenidoIMA');
            }

        $contentNew->idNews = $new->id;
        $contentNew->content = $request->input('contenido');
        $contentNew->estado = Config::get('constantes.estado_habilitado');
        $contentNew->save();

        return redirect()->route('new.index')->with('info', 'Se creo la etiqueta correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listUsers = User::all(); 
        $listTipoGaleria = TipoGaleria::all();
        $new = News::with('contentnews')->where('id', $id)->get()->first();
        $labels = Label::all();
        $prioridades = Prioridad::all();

        return view('news.edit', compact('new','labels', 'prioridades', 'listUsers', 'listTipoGaleria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditNoticiasRequest $request, $id)
    {
         $new = News::findOrFail($id);

        $new->title = $request->input('titulo');
        $new->summary = $request->input('resumen');
        $new->nameEditor = $request->input('nombreEditor');
        $new->idPrioridad = $request->input('distribucion');;
        $new->idLabelNews = $request->input('label');
        $new->idTipoGaleria = $request->input('tipogaleria');
        $new->keywords = $request->input('palabrasclave');
       

        $newContent = ContentNews::where('idNews', $id)->get()->first();
        $newContent->content = $request->input('contenido');
        
        if(is_file($request->file('dir_image')))
        {
            $image       = $request->file('dir_image');
            $name = "";
            $nameImage = $image->getClientOriginalName();
            for($i = 0; $i<strlen($nameImage); $i++)
            {
                $vocal = ord(substr($nameImage, $i, 1));
                if(!(($vocal >= 97 && $vocal<= 122)||($vocal >= 65 && $vocal <= 90) || $vocal == 46))
                    $name .= '-';
                else
                    $name .= substr($nameImage, $i, 1);
            }
            $filename    = date("Ymd-His", strtotime(now())).'_'.$name;
            $image_resize = \Image::make($image->getRealPath());
            list($width, $height) = getimagesize($image);

            if($width >= 800)
            {
                $newWidth = 800;
                $lessWidth = ($width-$newWidth)/$width;
                $newHeight = $height-$lessWidth*$height; 
                $image_resize->resize($newWidth, $newHeight);
            }

            if (!file_exists(storage_path('app/public/news/')))
            {
                 return 'El directorio no existe';
            }

            $image_resize->save(storage_path('app/public/news/'. $filename));

            $directorio = 'news/'.$filename; 

            //Seccion para guardar el directorio de la imagen actualizada
            $new->dirImagePortada = $directorio;
            $newContent->galeria = $directorio;
        }

         $new->update();
         $newContent->update();

       
        return redirect()->route('new.index');

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
        $new = News::findOrFail($id);
        $new->estado = Config::get('constantes.estado_deshabilitado');
        $new->update();

        return redirect()->route('new.index');
    }

    public function habilitar($id)
    {
        $new = News::findOrFail($id);
        $new->estado = Config::get('constantes.estado_habilitado');
        $new->update();

        return redirect()->route('new.index');
    }

    function updateTitleGuion($showTitleUrl)
    {
        $_showTitleUrl = "";

        $showTitleUrl = mb_strtolower($showTitleUrl);

        for($i = 0; $i<strlen($showTitleUrl); $i++)
        {
            $vocal = ord(substr($showTitleUrl, $i, 1));
            if(!(($vocal >= 97 && $vocal<= 122)||($vocal >= 48 && $vocal <= 57)))
            {
                if($vocal ==195)
                {
                    $_showTitleUrl .= substr($showTitleUrl, $i, 2); //Una vocal con tilde ocupa dos espacios
                    $i++;
                }
                else
                    $_showTitleUrl .= "-";
         
                //if(ord(substr($showTitleUrl, $i, 1)))
                
            }
            else
                $_showTitleUrl .= substr($showTitleUrl, $i, 1);

        }
        return $_showTitleUrl;
    }
}
