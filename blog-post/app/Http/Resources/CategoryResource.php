<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $niz=array();
        for( $i=0;$i<count($request);$i++){
            $niz[$i]=$request[$i]->name;
        }
        return $niz;
    }
    public function toArray1($request)
    {
        return $request;
    }
}
