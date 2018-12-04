<?php
namespace App\JelaSearch;
use Illuminate\Http\Request;
use App\Jela;
use App\Http\Resources\Jela as Jelas; 

use Illuminate\Database\Eloquent\Builder;

class JelaSearch
{
    public static function apply(Request $filters)
    {
        $upit = static::applyControlsFromRequest($filters, (new Jela)->newQuery());
        return static::getResults($upit);

    } 
 
    private static function applyControlsFromRequest(Request $request, Builder $upit)
    {
        foreach ($request->all() as $filterNaziv => $value) {
        $control = static::napraviFilterPolja($filterNaziv);

            if (static::isValidClass($control)) {
                $upit = $control::apply($upit, $value);
            }

        }
        return $upit;
    }
    private static function napraviFilterPolja($naziv)
    {
        return __NAMESPACE__ . '\\Filtriranje\\' . 
        str_replace(' ', '', 
        ucwords(str_replace('_', ' ', $naziv)));
    }
    private static function isValidClass($control)
    {
        return class_exists($control);
    }
    private static function getResults(Builder $upit)
    {
        return $upit->get();
    }

}
