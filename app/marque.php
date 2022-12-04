<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marque extends Model
{
    //
    protected $table = 'marquee';
    protected $fillable=['id','Description','Active'];
}
