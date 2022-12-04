<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class iachiev extends Model
{
    //
    protected $table = 'iachievment';
    protected $fillable=['year','institue','medal','medal_type'];
}
