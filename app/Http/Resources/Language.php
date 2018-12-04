<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Language extends Jela
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
        'naziv' => $this ->naziv,
        // 'translations' => $this ->translations,
        'opis' => $this->opis,
        'tag' => $this->tag,
        'sastojak' =>$this->sastojci,
        'kategorija' =>$this->kategorija,

        
        
        

    ];
    }
}