<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;

class Label extends Model
{
	public $table = 'labelnews';

	public function news()
	{
		return $this->hasMany(News::class, 'idLabelNews');
	}
}
