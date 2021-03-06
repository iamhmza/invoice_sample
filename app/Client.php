<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $guarded = [];

    public function organization()
    {
        return $this->belongsTo('App\Client');
    }
}
