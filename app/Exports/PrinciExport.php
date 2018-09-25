<?php

namespace App\Exports;

use App\Lab_Component;
use Maatwebsite\Excel\Concerns\FromCollection;


class PrinciExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Lab_Component::all();
    }
}
