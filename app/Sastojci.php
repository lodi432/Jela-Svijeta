<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sastojci extends Model
{
    //
    public $timestamps = false;
    
    public function Jela()
    {
    return $this->belongsToMany('App\Jela');
    }
}
