<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Sastojak extends Jela
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
            
            'naziv' => $this ->naziv,
            'opis' => $this->opis,
            'tag' => $this->tag,
            'kategorija' =>$this->kategorija,
            'sastojak' =>$this->sastojci,
        
        ];
       
    }
}