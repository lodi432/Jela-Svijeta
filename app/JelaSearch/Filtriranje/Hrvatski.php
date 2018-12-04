<?php

namespace App\JelaSearch\Filtriranje;

use Illuminate\Database\Eloquent\Builder;

class Hrvatski implements Filter
{
    public static function apply(Builder $builder, $value)
    {
        return $builder->whereHas('translations', function ($q) 
        use ($value) {
            $q->where('locale', 'hr');
            });
       
    }
}
