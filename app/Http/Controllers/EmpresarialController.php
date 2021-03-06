<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresarial;
use App\User;
use App\TipoGaleria;
use App\ContentEmpresarial;
use App\Http\Requests\CreateEmpresarialRequest;
use Config;

class EmpresarialController extends Controller
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
        $empresariales = Empresarial::all();
        
        return view('empresarial.index', compact('empresariales'));
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

        return view('empresarial.create', compact('listUsers', 'listTipoGaleria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmpresarialRequest $request)
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



        $empresarial = new Empresarial;
        $empresarial->title = $request->input('titulo');
        $empresarial->titleUrl = "";
        $empresarial->summary = $request->input('resumen');
        $empresarial->idUser = auth()->user()->id;
        $empresarial->idTipoGaleria = $request->input('tipogaleria');
        $user = User::findOrFail($request->input('nombreEditor'));
        $empresarial->nameEditor = $user->name.' '.$user->lastName;
        $empresarial->fechaPublicacion = now();
        $empresarial->dirImagePortada = $directorio;
        $empresarial->estado = Config::get('constantes.estado_habilitado');
        $empresarial->save();

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
        $_showTitleUrl .= "-".$empresarial->id;

        $empresarial->titleUrl = $_showTitleUrl;
        $empresarial->update();
        //Termino de creacion de ruta de la noticia

        $contentEmpresarial = new ContentEmpresarial;
        $contentEmpresarial->idEmpresarial = $empresarial->id;
        $contentEmpresarial->galeria = $directorio;
        $contentEmpresarial->content = $request->input('contenido');
        $contentEmpresarial->estado = Config::get('constantes.estado_habilitado');
        $contentEmpresarial->save();

        return redirect()->route('empresarial.index')->with('info', 'Se creo la noticia empresarial correctamente');
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
        $empresarial = Empresarial::with('contentEmpresarial')->where('id', $id)->get()->first();
        $listUsers = User::all(); 
        $listTipoGaleria = TipoGaleria::all();

        return view('empresarial.edit', compact('empresarial', 'listUsers', 'listTipoGaleria'));
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
        $empresarial = Empresarial::findOrFail($id);

        // UPLOAD IMAGEN
        //return $request->file('dir_image') == '';
        if(is_file($request->file('dir_image')))
        {
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
                 return 'El directorio no existe';
            }
            $image_resize->save(storage_path('app/public/business/'. $filename));
            $directorio = 'business/'.$filename; 

            $empresarialContent->galeria = $directorio;
            $empresarial->dirImagePortada = $directorio;

        }


        $empresarial->title = $request->input('titulo');
        $empresarial->summary = $request->input('resumen');
        $empresarial->nameEditor = $request->input('nombreEditor');
        $empresarial->idTipoGaleria = $request->input('tipogaleria');
        $empresarial->dirImagePortada = $directorio;

        $empresarialContent = ContentEmpresarial::where('idEmpresarial', $id)->get()->first();
        $empresarialContent->content = $request->input('contenido');
        

        $empresarial->update();
        $empresarialContent->update();

        return redirect()->route('empresarial.index');

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
        $label = Empresarial::findOrFail($id);
        $label->estado = Config::get('constantes.estado_deshabilitado');
        $label->update();

        return redirect()->route('empresarial.index');
    }

    public function habilitar($id)
    {
        $label = Empresarial::findOrFail($id);
        $label->estado = Config::get('constantes.estado_habilitado');
        $label->update();

        return redirect()->route('empresarial.index');
    }
}
