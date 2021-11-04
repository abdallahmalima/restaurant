<?php

namespace App\Imports;

use App\Models\Price;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class PriceImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Price([
            'name'=>$row[1],
            'number'=>$row[2],
            'disk'=>$row[3],
            'emails'=>$row[4],
            'bandwith'=>$row[5],
            'sub_domains'=>$row[6],
            'domains'=>$row[7]
        ]);
    }
}
