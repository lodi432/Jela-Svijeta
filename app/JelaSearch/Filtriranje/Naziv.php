<?php

namespace App\JelaSearch\Filtriranje;
use Illuminate\Database\Eloquent\Builder;
class Naziv implements Filter
{
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('naziv', $value);
    }
}
