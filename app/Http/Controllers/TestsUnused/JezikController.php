<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jela;
use App\JelaTranslation;
use App\Http\Resources\Meals as Meals; 
use App\Http\Resources\Language as JezikResource; 
use App\Http\Resources\Jela as JelaResource; 
class JezikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jela = new Jela();
    
        $jela->save();
        foreach (['en', 'de'] as $locale) {
            $jela->translateOrNew($locale)->naziv = "Naziv {$locale}";
            $jela->translateOrNew($locale)->opis = "Opis {$locale}";
        }
        $jela->save();
         return 'jela created';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDe()
    {
        $jela = new JelaTranslation();

         $flights = \App\JelaTranslation::where('locale', 'de')
                ->take(10)
                ->get();
            //   return $flights;
            //   return JelaResource::collection($flights);
            // return Meals::collection($flights);
       
    }

    public function getHr()
    {
        
        $flights = \App\JelaTranslation::where('locale', 'hr')
               ->take(10)
               ->get();
               return $flights;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jela = Jela::findOrFail($id);
        //Vrati nazad Jelo
        return new JelaResource($jela);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
