<?php

namespace App\Http\Controllers\Fruit;

use App\Http\Controllers\Controller;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{

    public function index()
    {
        $stock = new Stock();
        
        return view('dash.stock.index',[
            'validAmount' => $stock->validAmount(),
            'validAmountGroupByFruit' => $stock->validAmountGroupByFruit(),
        ]);
    }

   
}
