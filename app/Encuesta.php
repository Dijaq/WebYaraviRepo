<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
	public $table = 'encuestas';

    public function user()
    {
    	return $this->belongsTo(User::class, 'idUser');
    }

    public function encuestaOpciones()
    {
        return $this->hasMany(EncuestaOpciones::class, 'idEncuesta');
    }
}
