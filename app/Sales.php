<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sales extends Model
{
    protected $table = 'sales';

    protected $fillable = [
        'price',
        'sale_date',        
        'clients_id'
    ];

    public function allSales()
    {
        return DB::table('clients')
        ->join('sales', 'sales.clients_id', '=', 'clients.id')        
        ->get();
    }
}
