<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CustomCollection;

class EstructuraNoticia extends Model
{
	public function newCollection(array $models = [])
    {
        return new CustomCollection($models);
    }
}