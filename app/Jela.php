<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Jela extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['naziv','opis'];

    // protected $hidden = ['created_at','updated_at','deleted_at'];
   
    public function tag()
    {
    return $this->belongsToMany('App\Tag');
    }
    
    
    public function sastojci()
    {
    return $this->belongsToMany('App\Sastojci');
    }

    public function kategorija()
    {
    return $this->hasMany('App\Kategorija','jela_id', 'id');
    }

}

