<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $timestamps = false;

    public function genre()
    {
        return $this->belongsToMany('App\Genre');
    }
}
