<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campanias extends Model
{
    public $table = 'campanias';

    public function contentCampanias()
    {
    	return $this->hasOne(ContentCampanias::class, 'idCampanias');
    }
}
