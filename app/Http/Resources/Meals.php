<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Meals extends Jela
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    
    public function toArray($request)
    {
        
       // return parent::toArray($request);
        
   
        return [
          
            'id' => $this->id,
            'translations' => $this ->translations,
            'opis' => $this->opis,
            'tag' => $this->tag,
            'sastojak' =>$this->sastojci,
            'kategorija' =>$this->kategorija,
            'created_at' =>$this->created_at->diffForHumans(),
            'updated_at'=>$this->updated_at->diffForHumans(),

              
                 
        
    
        ];
       
    }

      
    
    //  public function with($request){
    //      return [
    //      'version' => '1.0.0',
    //         'author' => 'Domagoj Glavacevic',
    // ];
    // }
}
