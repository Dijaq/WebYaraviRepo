<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campanias;
use App\User;
use App\TipoGaleria;
use App\ContentCampanias;
use App\Http\Requests\CreateCampaniasRequest;
use Config;

class CampaniasController extends Controller
{
    //function __construct()
    //{
    //    $this->middleware('auth');
   //}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campanias = Campanias::all();
        
        return view('campanias.index', compact('campanias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listUsers = User::all(); 
        $listTipoGaleria = TipoGaleria::all();

        return view('campanias.create', compact('listUsers', 'listTipoGaleria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCampaniasRequest $request)
    {
         //return $request;
        $image       = $request->file('dir_image');
        $name = "";
        $nameImage    = $image->getClientOriginalName();
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

        if (!file_exists(storage_path('app/public/business/')))
        {
             //mkdir(public_path('publicity\\'), 777, true);
             return 'El directorio no existe';
        }
        //return public_path('publicity');
        $image_resize->save(storage_path('app/public/business/'. $filename));

        //$directorio = $request->file('dir_image')->store('public/publicity'); 
        $directorio = 'business/'.$filename; 



        $campanias = new Campanias;
        $campanias->title = $request->input('titulo');
        $campanias->titleUrl = "";
        $campanias->summary = $request->input('resumen');
        //$campanias->idUser = auth()->user()->id;
        $campanias->idUser = 1;
        $campanias->idTipoGaleria = $request->input('tipogaleria');
        $user = User::findOrFail($request->input('nombreEditor'));
        $campanias->nameEditor = $user->name.' '.$user->lastName;
        $campanias->fechaPublicacion = now();
        $campanias->dirImagePortada = $directorio;
        $campanias->estado = Config::get('constantes.estado_habilitado');
        $campanias->save();

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
        $_showTitleUrl .= "-".$campanias->id;

        $campanias->titleUrl = $_showTitleUrl;
        $campanias->update();
        //Termino de creacion de ruta de la noticia

        $contentCampanias = new ContentCampanias;
        $contentCampanias->idCampanias = $campanias->id;
        $contentCampanias->galeria = $directorio;
        $contentCampanias->content = $request->input('contenido');
        $contentCampanias->estado = Config::get('constantes.estado_habilitado');
        $contentCampanias->save();

        return redirect()->route('campania.index')->with('info', 'Se creo la noticia campanias correctamente');
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

        $campania = Campanias::with('contentCampanias')->where('id', $id)->get()->first();
        $listUsers = User::all(); 
        $listTipoGaleria = TipoGaleria::all();

        //return $campania->contentCampanias->content;

        return view('campanias.edit', compact('campania', 'listUsers', 'listTipoGaleria'));
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
        $campanias = Campanias::findOrFail($id);

        $campanias->title = $request->input('titulo');
        $campanias->summary = $request->input('resumen');
        $campanias->nameEditor = $request->input('nombreEditor');
        $campanias->idTipoGaleria = $request->input('tipogaleria');

        $campaniasContent = ContentCampanias::where('idCampanias', $id)->get()->first();
        $campaniasContent->content = $request->input('contenido');

        $campanias->update();
        $campaniasContent->update();

        return redirect()->route('campania.index');

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deshabilitar($id)
    {
        $label = Campanias::findOrFail($id);
        $label->estado = Config::get('constantes.estado_deshabilitado');
        $label->update();

        return redirect()->route('campania.index');
    }

    public function habilitar($id)
    {
        $label = Campanias::findOrFail($id);
        $label->estado = Config::get('constantes.estado_habilitado');
        $label->update();

        return redirect()->route('campania.index');
    }
}
