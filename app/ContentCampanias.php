<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentCampanias extends Model
{
    public $table = 'content_campanias';

     public function campanias()
    {
    	return $this->belongsTo(Campanias::class, 'idCampanias');
    }
}
