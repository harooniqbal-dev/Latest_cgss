<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AOlevel extends Model
{
    protected $table = 'aolevel';
    protected $fillable=['year','name','phy','chem','biomath','class','total_Grades'];
}
