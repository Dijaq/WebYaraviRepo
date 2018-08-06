<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DirectoryImage;
use Config;
use App\UploadBloque;
use App\TipoDirectorio;

class AdminUploadImage extends Controller
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
        $imagenes = DirectoryImage::orderBy('created_at','desc')->paginate(20);
        $urlServidor = Config::get('constantes.ruta_directorio_archivos');
        return view('uploadImage.index', compact('imagenes', 'urlServidor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploadImage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        if (!file_exists(storage_path('app/public/news/')))
        {
             return 'El directorio no existe';
        }
        $image_resize->save(storage_path('app/public/news/'. $filename));

        //$directorio = $request->file('dir_image')->store('public/publicity'); 
        $directorio = 'storage/news/'.$filename; 
        //FIN DE UPLOAD IMAGE

        $uploadBloque = new UploadBloque;
        $uploadBloque->idTipoDirectorio = 1;
        $uploadBloque->fechaUpload = now();
        $uploadBloque->estado = Config::get('constantes.estado_habilitado');
        $uploadBloque->save();


        $directorioImagen = new DirectoryImage;
        $directorioImagen->idUploadImage = $uploadBloque->id;
        $directorioImagen->dirImage =  $directorio;
        $directorioImagen->estado =  2;
        $directorioImagen->save();

        return redirect()->route('imagen.index')->with('info', 'Se creo la publicadad correctamente');
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
