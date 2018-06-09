<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;

class Prioridad extends Model
{
    public $table = "prioridad";

    public function news()
	{
		return $this->hasMany(News::class, 'idPrioridad');
	}
}
