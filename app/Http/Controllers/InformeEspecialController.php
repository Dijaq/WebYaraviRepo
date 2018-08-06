<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContentInformeEspecial;
use App\User;
use App\TipoGaleria;
use App\InformeEspecial;
use Config;

class InformeEspecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informesespeciales = InformeEspecial::all();
        
        return view('informesespeciales.index', compact('informesespeciales'));
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

        return view('informesespeciales.create', compact('listUsers', 'listTipoGaleria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        if (!file_exists(storage_path('app/public/specialreport/')))
        {
             //mkdir(public_path('publicity\\'), 777, true);
             return 'El directorio no existe';
        }
        //return public_path('publicity');
        $image_resize->save(storage_path('app/public/specialreport/'. $filename));

        //$directorio = $request->file('dir_image')->store('public/publicity'); 
        $directorio = 'specialreport/'.$filename; 



        $informeEspecial = new InformeEspecial;
        $informeEspecial->title = $request->input('titulo');
        $informeEspecial->titleUrl = "";
        $informeEspecial->summary = $request->input('resumen');
        $informeEspecial->idUser = auth()->user()->id;
        $informeEspecial->idTipoGaleria = $request->input('tipogaleria');
        $user = User::findOrFail($request->input('nombreEditor'));
        $informeEspecial->nameEditor = $user->name.' '.$user->lastName;
        $informeEspecial->fechaPublicacion = now();
        $informeEspecial->dirImagePortada = $directorio;
        $informeEspecial->estado = Config::get('constantes.estado_habilitado');
        $informeEspecial->save();

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
        $_showTitleUrl .= "-".$informeEspecial->id;

        $informeEspecial->titleUrl = $_showTitleUrl;
        $informeEspecial->update();
        //Termino de creacion de ruta de la noticia

        $contentInformeEspecial = new ContentInformeEspecial;
        $contentInformeEspecial->idInformeEspecial = $informeEspecial->id;
        $contentInformeEspecial->galeria = $directorio;
        $contentInformeEspecial->content = $request->input('contenido');
        $contentInformeEspecial->estado = Config::get('constantes.estado_habilitado');
        $contentInformeEspecial->save();

        return redirect()->route('informeespecial.index')->with('info', 'Se creo el informe especial correctamente');
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

    public function deshabilitar($id)
    {
        $informeEspecial = InformeEspecial::findOrFail($id);
        $informeEspecial->estado = Config::get('constantes.estado_deshabilitado');
        $informeEspecial->update();

        return redirect()->route('informeespecial.index');
    }

    public function habilitar($id)
    {
        $informeEspecial = InformeEspecial::findOrFail($id);
        $informeEspecial->estado = Config::get('constantes.estado_habilitado');
        $informeEspecial->update();

        return redirect()->route('informeespecial.index');
    }
}
