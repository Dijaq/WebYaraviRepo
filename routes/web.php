<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('data', ['as' => 'data', 'uses' => 'Data@index']);

Route::get('imprimir', 'MainController@imprimir');

Route::get('/', ['as' => 'home', 'uses' => 'MainController@home']);

Route::get('/pruebas', ['as' => 'homes', 'uses' => 'PruebasController@home']);

Route::get('/notapruebas', ['as' => 'notapruebas', 'uses' => 'PruebasController@onenew']);

Route::get('nota/{labelName}', ['as' => 'classified.show', 'uses' => 'MainController@show']);

Route::get('actualidad/{labelName}', ['as' => 'actualidad.show', 'uses' => 'MainController@actualidadshow']);

Route::get('notas/empresariales', ['as' => 'nota.classifiedempresarial', 'uses' => 'MainController@classifiedempresarial']);

Route::get('notas/informesespeciales', ['as' => 'nota.classifiedinformesespeciales', 'uses' => 'MainController@classifiedinformesespeciales']);

Route::get('notas/campanias', ['as' => 'nota.classifiedcampanias', 'uses' => 'MainController@classifiedcampanias']);

//Route::get('noticias/{kind_of_new}', ['as' => 'kind_of_new.show', 'uses' => 'MainController@show']);

//Prueba
Route::get('noticia/{name}/{titleUrl}', ['as' => 'newcontent.show', 'uses' => 'NewController@index']);


//Publicidad Contenido
Route::get('publicidad', ['as' => 'publicity.index', 'uses' => 'PublicityController@index']);

Route::get('publicidad/crear', ['as' => 'publicity.create', 'uses' => 'PublicityController@create']);

Route::post('publicidad', ['as' => 'publicity.store', 'uses' => 'PublicityController@store']);

Route::get('publicidad/{id}/editar', ['as' => 'publicity.edit', 'uses' => 'PublicityController@edit']);

Route::put('publicidad/{id}', ['as' => 'publicity.update', 'uses' => 'PublicityController@update']);

Route::delete('publicidad/deshabilitar/{id}', ['as' => 'publicity.deshabilitar', 'uses' => 'PublicityController@deshabilitar']);

Route::delete('publicidad/habilitar/{id}', ['as' => 'publicity.habilitar', 'uses' => 'PublicityController@habilitar']);



//Label contenido
Route::get('etiquetas', ['as' => 'label.index', 'uses' => 'LabelController@index']);

Route::get('etiquetas/crear', ['as' => 'label.create', 'uses' => 'LabelController@create']);

Route::post('etiquetas', ['as' => 'label.store', 'uses' => 'LabelController@store']);

Route::get('etiquetas/{id}/editar', ['as' => 'label.edit', 'uses' => 'LabelController@edit']);

Route::put('etiquetas/{id}', ['as' => 'label.update', 'uses' => 'LabelController@update']);

Route::delete('etiquetas/deshabilitar/{id}', ['as' => 'label.deshabilitar', 'uses' => 'LabelController@deshabilitar']);

Route::delete('etiquetas/habilitar/{id}', ['as' => 'label.habilitar', 'uses' => 'LabelController@habilitar']);



//Users
Route::get('usuarios', ['as' => 'user.index', 'uses' => 'UserController@index']);

Route::get('usuarios/crear', ['as' => 'user.create', 'uses' => 'UserController@create']);

Route::post('usuarios', ['as' => 'user.store', 'uses' => 'UserController@store']);

Route::get('usuarios/{id}/editar', ['as' => 'user.edit', 'uses' => 'UserController@edit']);

Route::put('usuarios/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);

Route::get('usuarios/change/{id}', ['as' => 'user.newpassword', 'uses' => 'UserController@newpassword']);

Route::put('usuarios/change/{id}/password', ['as' => 'user.updatepassword', 'uses' => 'UserController@updatepassword']);

Route::delete('usuarios/deshabilitar/{id}', ['as' => 'user.deshabilitar', 'uses' => 'UserController@deshabilitar']);

Route::delete('usuarios/habilitar/{id}', ['as' => 'user.habilitar', 'uses' => 'UserController@habilitar']);


//News
Route::get('noticias', ['as' => 'new.index', 'uses' => 'AdminNewsController@index']);

Route::get('noticias/crear', ['as' => 'new.create', 'uses' => 'AdminNewsController@create']);

Route::post('noticias', ['as' => 'new.store', 'uses' => 'AdminNewsController@store']);

Route::get('noticias/{id}/editar', ['as' => 'new.edit', 'uses' => 'AdminNewsController@edit']);

Route::put('noticias/{id}', ['as' => 'new.update', 'uses' => 'AdminNewsController@update']);

Route::delete('noticias/deshabilitar/{id}', ['as' => 'new.deshabilitar', 'uses' => 'AdminNewsController@deshabilitar']);

Route::delete('noticias/habilitar/{id}', ['as' => 'new.habilitar', 'uses' => 'AdminNewsController@habilitar']);


Route::get('empresariales', ['as' => 'empresarial.index', 'uses' => 'EmpresarialController@index']);

Route::get('empresariales/crear', ['as' => 'empresarial.create', 'uses' => 'EmpresarialController@create']);

Route::post('empresariales', ['as' => 'empresarial.store', 'uses' => 'EmpresarialController@store']);

Route::get('empresariales/{id}/editar', ['as' => 'empresarial.edit', 'uses' => 'EmpresarialController@edit']);

Route::put('empresariales/{id}', ['as' => 'empresarial.update', 'uses' => 'EmpresarialController@update']);

Route::delete('empresariales/deshabilitar/{id}', ['as' => 'empresarial.deshabilitar', 'uses' => 'EmpresarialController@deshabilitar']);

Route::delete('empresariales/habilitar/{id}', ['as' => 'empresarial.habilitar', 'uses' => 'EmpresarialController@habilitar']);

Route::get('empresarial/{titleUrl}', ['as' => 'empresarial.detail', 'uses' => 'MainController@empresarialDetail']);



Route::get('campanias', ['as' => 'campania.index', 'uses' => 'CampaniasController@index']);

Route::get('campanias/crear', ['as' => 'campania.create', 'uses' => 'CampaniasController@create']);

Route::post('campanias', ['as' => 'campania.store', 'uses' => 'CampaniasController@store']);

Route::get('campanias/{id}/editar', ['as' => 'campania.edit', 'uses' => 'CampaniasController@edit']);

Route::put('campanias/{id}', ['as' => 'campania.update', 'uses' => 'CampaniasController@update']);

Route::delete('campanias/deshabilitar/{id}', ['as' => 'campania.deshabilitar', 'uses' => 'CampaniasController@deshabilitar']);

Route::delete('campanias/habilitar/{id}', ['as' => 'campania.habilitar', 'uses' => 'CampaniasController@habilitar']);

Route::get('campania/{titleUrl}', ['as' => 'campania.detail', 'uses' => 'MainController@campaniaDetail']);



//Informe especial

Route::get('informesespeciales', ['as' => 'informeespecial.index', 'uses' => 'InformeEspecialController@index']);

Route::get('informesespeciales/crear', ['as' => 'informeespecial.create', 'uses' => 'InformeEspecialController@create']);

Route::post('informesespeciales', ['as' => 'informeespecial.store', 'uses' => 'InformeEspecialController@store']);

Route::get('informesespeciales/{id}/editar', ['as' => 'informeespecial.edit', 'uses' => 'InformeEspecialController@edit']);

Route::put('informesespeciales/{id}', ['as' => 'informeespecial.update', 'uses' => 'InformeEspecialController@update']);

Route::delete('informesespeciales/deshabilitar/{id}', ['as' => 'informeespecial.deshabilitar', 'uses' => 'InformeEspecialController@deshabilitar']);

Route::delete('informesespeciales/habilitar/{id}', ['as' => 'informeespecial.habilitar', 'uses' => 'InformeEspecialController@habilitar']);

Route::get('informesespeciales/{titleUrl}', ['as' => 'informeespecial.detail', 'uses' => 'MainController@informeEspecialDetail']);




Route::get('yaravi/programacion', ['as' => 'programacion.index', 'uses' => 'MainProgramacionController@index']);



Route::get('yaravi/servicios', ['as' => 'servicios.index', 'uses' => 'MainServiciosController@index']);



Route::get('yaravi/amakella', ['as' => 'amakella.index', 'uses' => 'MainAmakellaController@index']);



Route::get('yaravi/encuestadoraamakella', ['as' => 'encuestadoraamakella.index', 'uses' => 'MainEncuestadoraAmakellaController@index']);



Route::get('yaravi/nosotros/equipodetrabajo', ['as' => 'nosotros.equipotrabajo', 'uses' => 'MainNosotrosController@equipotrabajo']);

Route::get('yaravi/nosotros/historia', ['as' => 'nosotros.historia', 'uses' => 'MainNosotrosController@historia']);

Route::get('yaravi/nosotros/quienessomos', ['as' => 'nosotros.quienessomos', 'uses' => 'MainNosotrosController@quienessomos']);

Route::get('yaravi/audioenvivo', ['as' => 'audioenvivo.index', 'uses' => 'MainAudioEnVivo@index']);



//Rutas de Encuestas
Route::get('encuestas', ['as' => 'encuesta.index', 'uses' => 'EncuestaController@index']);

Route::get('encuestas/crear', ['as' => 'encuesta.create', 'uses' => 'EncuestaController@create']);

Route::post('encuestas', ['as' => 'encuesta.store', 'uses' => 'EncuestaController@store']);

Route::get('encuestas/{id}/editar', ['as' => 'encuesta.edit', 'uses' => 'EncuestaController@edit']);

Route::put('encuestas/{id}', ['as' => 'encuesta.update', 'uses' => 'EncuestaController@update']);

Route::delete('encuestas/deshabilitar/{id}', ['as' => 'encuesta.deshabilitar', 'uses' => 'EncuestaController@deshabilitar']);

Route::delete('encuestas/habilitar/{id}', ['as' => 'encuesta.habilitar', 'uses' => 'EncuestaController@habilitar']);

//Usa un diferente controlador
Route::put('encuestas/votocrear/{id}', ['as' => 'encuesta.votoStore', 'uses' => 'MainController@votoStore']);


//Upload Image
Route::get('imagenes', ['as' => 'imagen.index', 'uses' => 'AdminUploadImage@index']);

Route::get('imagenes/crear', ['as' => 'imagen.create', 'uses' => 'AdminUploadImage@create']);

Route::post('imagenes', ['as' => 'imagen.store', 'uses' => 'AdminUploadImage@store']);

Route::get('imagenes/{id}/editar', ['as' => 'imagen.edit', 'uses' => 'AdminUploadImage@edit']);

Route::put('imagenes/{id}', ['as' => 'imagen.update', 'uses' => 'AdminUploadImage@update']);

Route::delete('imagenes/deshabilitar/{id}', ['as' => 'imagen.deshabilitar', 'uses' => 'AdminUploadImage@deshabilitar']);

Route::delete('imagenes/habilitar/{id}', ['as' => 'imagen.habilitar', 'uses' => 'AdminUploadImage@habilitar']);


Route::get('politicadeprivacidad', ['as' => 'politicaprivacidad.index', 'uses' => 'PoliticaPrivacidad@index']);


Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout');




//Videos contenido
Route::get('videos', ['as' => 'video.index', 'uses' => 'VideosController@index']);

Route::get('galeriavideos', ['as' => 'galeriavideos.index', 'uses' => 'VideosController@publicindex']);
Route::get('nuestro_heroes', ['as' => 'nuestroHeroes.index', 'uses' => 'VideosController@nuestros_heroes_index']);

Route::get('videos/crear', ['as' => 'video.create', 'uses' => 'VideosController@create']);

Route::post('videos', ['as' => 'video.store', 'uses' => 'VideosController@store']);

Route::get('videos/{id}/editar', ['as' => 'video.edit', 'uses' => 'VideosController@edit']);

Route::put('videos/{id}', ['as' => 'video.update', 'uses' => 'VideosController@update']);

Route::delete('videos/deshabilitar/{id}', ['as' => 'video.deshabilitar', 'uses' => 'VideosController@deshabilitar']);

Route::delete('videos/habilitar/{id}', ['as' => 'video.habilitar', 'uses' => 'VideosController@habilitar']);

Route::delete('videos/finalizar/{id}', ['as' => 'video.finalizar', 'uses' => 'VideosController@finalizar']);

Route::delete('videos/desfinalizar/{id}', ['as' => 'video.desfinalizar', 'uses' => 'VideosController@desfinalizar']);


//Information General estatica incluida en la web
Route::get('yaravi/general/elecciones2018/planesdegobierno', ['as' => 'planesdegobierno2018.index', 'uses' => 'GeneralInformationController@planesdegobierno2018']);

Route::get('/sitemap.xml', 'SitemapController@index');
