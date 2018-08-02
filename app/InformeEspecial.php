<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeEspecial extends Model
{
    public $table = 'informeespecial';

     public function contentInformeEspecial()
    {
    	return $this->hasOne(ContentInformeEspecial::class, 'idInformeEspecial');
    }
}
