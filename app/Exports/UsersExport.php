<?php

namespace App\Exports;

use App\Staff_Component;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;

class UsersExport implements FromCollection,WithHeadings

{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Staff_Component::all();
    
    }
    // public function query(){
    //     return Staff_Component::query();
    // }

    public function headings() : array{
        return [
            'Id',
            'Teacher_Id',
            'Components',
            'Spare',
            'Wanted',
            'Wasted',
        ];
    }
}
