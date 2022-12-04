<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    //
    public function title()
    {
        return $this->belongsTo('App\Title');
    }
}
