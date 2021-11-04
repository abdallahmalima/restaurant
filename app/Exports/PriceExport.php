<?php

namespace App\Exports;

use App\Models\Price;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class PriceExport implements FromCollection,WithHeadings
{
    
    public function headings(): array
    {

        return [
            'Name',
            'Number',
            'Disk',
            'Emails',
            'Bandwith',
            'Domains',
            'Sub domains',
        ];
    }

    
    public function collection()
    {
      return Price::all()->makeHidden(['id','created_at','updated_at']);  
    }
    

}
