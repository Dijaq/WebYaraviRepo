<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;

class ContentNews extends Model
{
    public $table = 'contentnews';

    public function news()
    {
    	return $this->belongsTo(News::class, 'idNews');
    }
}
