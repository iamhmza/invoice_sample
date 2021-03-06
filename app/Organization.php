<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //
    protected $guarded = [];

    public function clients()
    {
        return $this->hasMany('App\Client');
    }
}
