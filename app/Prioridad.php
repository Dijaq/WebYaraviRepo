<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\News;

class Prioridad extends Model
{
    public $table = "prioridad";

    public function news()
	{
		return $this->hasMany(News::class, 'idPrioridad');
	}
}
