<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class FunctionAssess extends Controller
{
    public function calAssess(Request $request){
        echo $request->years ." ";
        echo $request->hidden_item ." ";
        echo $request->hidden_price;

    }
}
