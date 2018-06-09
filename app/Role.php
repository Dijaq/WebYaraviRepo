<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\User;

class Role extends Model
{
    public $table = 'role';

    public function user()
    {
    	return $this->hasMany(User::class, 'idRole');
    }
}
