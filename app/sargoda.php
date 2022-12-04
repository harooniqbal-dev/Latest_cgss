<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sargoda extends Model
{
    //
    protected $table = 'sargodas';
    protected $fillable=['name','email','post','image'];
}
