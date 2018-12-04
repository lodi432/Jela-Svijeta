<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Jela;
use App\Http\Resources\Jela as JelaResource; 
use App\Http\Resources\Tag as TagResource;
use App\Http\Resources\Kategorija as KategorijaResource;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Jela $jela)
    {

        return $jela->tag;
    }

  


    public function getByTag($id){
        $cat1=null;
        $per_page = 15;   
            if(isset($_GET['en'])){
            
                app()->setLocale('en');
          
            }
            if(isset($_GET['de'])){
            
                app()->setLocale('de');
            
              }
           
          $rezultat = Jela::whereHas('tag', function ($q) use ($id) {
          $q->where('tag_id', $id);
          })->get();
   
        return TagResource::collection($rezultat);

    }
    public function getByCategory($id){  
        if(isset($_GET['en'])){
            
            app()->setLocale('en');
      
        }
        if(isset($_GET['de'])){
        
            app()->setLocale('de');
        
          }
        //Provjeri ako requested tag ID jelo ima kategoriju.
       
        $rezultat = Jela::has('kategorija')->whereHas('tag', function ($q) use ($id) {
        $q->where('tag_id', $id);
        })->get();
        return JelaResource::collection($rezultat);
    }

    public function getByAll($id){  
       
        //Provjeri ako requested tag ID jelo ima kategoriju i sastojke.
       
      $rezultat = Jela::has('sastojci')->has('kategorija')->whereHas('tag', function ($q) use ($id) {
       $q->where('tag_id', $id);
       })->paginate();
       return JelaResource::collection($rezultat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function poTagu($id,$in=0)
    {

        $jela = Jela::paginate();
        
        $rezultat = Jela::whereHas('tag', function ($q) use ($id) {
        $q->where('jela_id', $id);
        })->get();
        return JelaResource::collection($rezultat);
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
        //
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
