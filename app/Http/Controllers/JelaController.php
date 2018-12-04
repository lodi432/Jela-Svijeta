<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Jela;
use App\Http\Resources\Jela as JelaResource; 
class JelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {      
        
            if($request->has('per_page')) {
           
          

       
     }
            $per_page = 15;   
            $jela = Jela::paginate($per_page );
           //Vračanje jela kao resource
          return JelaResource::collection($jela);
     
    }
 
    public function tag($tagParam)
    {
        $tags = \App\Tag::find($tagParam)->jela;
        return $tags;
    }

    public function lang($e)
    {
        
     

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jela = $request->isMethod('put') ? Jela::findOrFail
        ($request->jela_id) : new Jela;

        $jela->id = $request->input('jela_id');
        $jela->naziv = $request->input('naziv');
        $jela->opis = $request->input('opis');

        if($jela->save()){
            return new JelaResource($jela);
        }

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
        $jela = Jela::findOrFail($id);

        if($jela->delete()){
            return new JelaResource($jela);
           

        }
    }
}
