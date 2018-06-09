<?php

namespace radioyaravi;

use Illuminate\Database\Eloquent\Model;
use app\News;

class ContentNews extends Model
{
    public $table = 'contentnews';

    public function news()
    {
    	return $this->belongsTo(News::class, 'idNews');
    }
}
