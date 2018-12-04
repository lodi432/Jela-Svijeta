<?php

namespace App\JelaSearch\Filtriranje;

use Illuminate\Database\Eloquent\Builder;

class Sastojak implements Filter
{
    public static function apply(Builder $builder, $value)
    {
        return $builder->whereHas('sastojci', $value);
    }
}
