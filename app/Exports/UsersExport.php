<?php

namespace App\Exports;

use App\Staff_Component;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Staff_Component::all();
    
    }

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
