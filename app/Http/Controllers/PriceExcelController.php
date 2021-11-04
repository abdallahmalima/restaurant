<?php

namespace App\Http\Controllers;

use App\Exports\PriceExport;
use App\Imports\PriceImport;
use App\Models\Price;
use Illuminate\Http\Request;
use Excel;
class PriceExcelController extends Controller
{
    //
    public function exportExcel() {
      
       
        return Excel::download(new PriceExport, 'prices.xlsx');
    }
    public function exportCsv() {
      
       
        return Excel::download(new PriceExport, 'prices.csv');
    }


    public function import(Request $request){
        Excel::import(new PriceImport, $request->file('file'));
        return back();
    }

    public function importForm(){
        return view('prices.excel.create');
    }
}
