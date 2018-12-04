<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    //
    public $timestamps = false;
  
    public function Jela()
    {
    return $this->belongsTo('App\Jela','jela_id', 'id');
    }
}
