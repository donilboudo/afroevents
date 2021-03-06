<?php

namespace AfroEvents;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = array('name');
    
    public function cities()
    {
        return $this->hasMany('City');
    }
}
