<?php

namespace App\JelaSearch\Filtriranje;

use Illuminate\Database\Eloquent\Builder;

class Kategorija implements Filter
{
    public static function apply(Builder $builder, $value)
    {
        return $builder->whereHas('kategorija', $value);
    }
}
