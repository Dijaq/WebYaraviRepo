<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Label;
use App\User;
use App\ContentNews;
use App\Prioridad;

class News extends Model
{
    public $table = 'news';

    public function label()
    {
    	return $this->belongsTo(Label::class, 'idLabelNews');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'idUser');
    }

    public function contentnews()
    {
    	return $this->hasOne(ContentNews::class, 'idNews');
    }

    public function prioridad()
    {
        return $this->belongsTo(Prioridad::class, 'idPrioridad');
    }
}
