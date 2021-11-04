<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;
use PDF;
class PricePdfController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $prices=Price::all();
       // $pdf=PDF::loadView('prices.pdf.index',compact('prices'));
        //return $pdf->stream('prices.pdf');

       // return $pdf->download('data.pdf');
       return view('prices.pdf.index_test',compact('prices'));
        
    }
}
