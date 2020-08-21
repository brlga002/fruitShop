<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Stock extends Model
{
    protected $table = 'stock';

    protected $fillable = [
        'amount',
        'expiration_date',        
        'fruits_id'
    ];

    public function validAmount()
    {
        return DB::table('stock')
        ->join('fruits', 'stock.fruits_id', '=', 'fruits.id')
        ->where('amount', '>', 0)
        ->get();
    }

    public function validAmountGroupByFruit()
    {
        return DB::table('stock')        
        ->select('*',DB::raw('SUM(amount) as amounts'))
        ->join('fruits', 'stock.fruits_id', '=', 'fruits.id')
        ->where('amount', '>', 0)               
        ->groupBy('fruits.id')
        ->get();
    }

    
}
