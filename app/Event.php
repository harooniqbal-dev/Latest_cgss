<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{
	protected $table = 'event';
    protected $fillable=['event_name','event_date','event_short','event_description','event_image'];

    //
}
