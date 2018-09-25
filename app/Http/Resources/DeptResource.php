<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DeptResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    //     return [
    //         'dept_id' =>$this->dept_id,
    //         'dept_name' =>$this->dept_name
    //     ];
     }

    // public function with($request)
    // {
    //     return[
    //         'path' => '127.0.0.1:8000/api/departments'
    //     ];
    // }
}
