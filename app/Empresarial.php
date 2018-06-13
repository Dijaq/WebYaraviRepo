<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresarial extends Model
{
    public $table = 'empresariales';

    public function contentEmpresarial()
    {
    	return $this->hasOne(ContentEmpresarial::class, 'idEmpresarial');
    }
}
