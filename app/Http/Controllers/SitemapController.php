<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Config;

class SitemapController extends Controller
{
    /*public function index()
	{
	  $post = Post::active()->orderBy('updated_at', 'desc')->first();
	  $podcast = Podcast::active()->orderBy('updated_at', 'desc')->first();

	  return response()->view('sitemap.index', [
	      'post' => $post,
	      'podcast' => $podcast,
	  ])->header('Content-Type', 'text/xml');
	}*/

	public function index()
	{
		$news = News::with('label')->orderBy('fechaPublicacion','dsc')->get();
		$urlServidor = Config::get('constantes.ruta_directorio');

		return response()->view('sitemap.sitemap', compact('news', 'urlServidor'))->header('Content-Type', 'text/xml');
	}
}
