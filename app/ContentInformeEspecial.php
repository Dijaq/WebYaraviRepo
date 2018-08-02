<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentInformeEspecial extends Model
{
    public $table = 'content_informeespecial';

     public function empresarial()
    {
    	return $this->belongsTo(InformeEspecial::class, 'idInformeEspecial');
    }
}
