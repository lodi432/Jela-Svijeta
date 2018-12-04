<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Time extends Jela
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
            'created_at' =>$this->created_at->diffForHumans(),
            'updated_at'=>$this->updated_at->diffForHumans(),
        
        ];
       
    }
}