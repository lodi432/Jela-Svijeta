<?php

namespace App\JelaSearch\Filtriranje;

use Illuminate\Database\Eloquent\Builder;

class Tag implements Filter
{
    public static function apply(Builder $builder, $value)
    {
        return $builder->whereHas('tag', function ($q) 
        use ($value) {
            $q->where('tag_id', $value);
            })
        ;
    }
}
