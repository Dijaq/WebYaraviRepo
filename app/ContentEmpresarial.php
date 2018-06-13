<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentEmpresarial extends Model
{
    public $table = 'content_empresarial';

     public function empresarial()
    {
    	return $this->belongsTo(Empresarial::class, 'idEmpresarial');
    }
}
