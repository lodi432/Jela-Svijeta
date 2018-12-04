<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\JelaSearch\JelaSearch;
use \Dimsav\Translatable\Translatable;


class SearchController extends Controller
{
    public function filter(Request $request)
    {      
        return JelaSearch::apply($request);
       
    }
}
