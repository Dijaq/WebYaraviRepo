<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresarial;
use App\User;
use App\TipoGaleria;
use App\ContentEmpresarial;
use Config;

class EmpresarialController extends Controller
{
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
    public function store(Request $request)
    {
        $empresarial = new Empresarial;
        $empresarial->title = $request->input('titulo');
        $empresarial->titleUrl = "";
        $empresarial->summary = $request->input('resumen');
        $empresarial->idUser = auth()->user()->id;
        $empresarial->idTipoGaleria = $request->input('tipogaleria');
        $empresarial->nameEditor = $request->input('nombreEditor');
        $empresarial->fechaPublicacion = now();
        $empresarial->dirImagePortada = $request->input('dir_image');
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
        $contentEmpresarial->galeria = $request->input('dir_image');
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
