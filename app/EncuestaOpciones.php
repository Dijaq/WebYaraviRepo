<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncuestaOpciones extends Model
{
	public $table = 'encuestaopcion';

    public function encuesta()
    {
    	return $this->belongsTo(Encuesta::class, 'idEncuesta');
    }
}
