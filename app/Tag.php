<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
    public $timestamps = false;
  
    /** 
     * Dohvačanje jela asocirana sa tagom
     * 
     */

    public function Jela()
    {
    return $this->belongsToMany('App\Jela');
    }
}
