<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function cart() 
    {
        return $this->hasOne('App\Cart');
    }

}
