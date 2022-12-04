<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function gallery()
    {
        return $this->hasMany('App\gallery');
    }
}
