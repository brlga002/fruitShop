<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'nome',
        'cpf'        
    ];

    public function sales()
    {
        return $this->hasOne(Sales::class,'clients_id','id');
    }

    public function salesContent()
    {
        return DB::table('clients')
        ->join('sales', 'clients.id', '=', 'sales.clients_id')
        ->join('sales_content', 'sales.id', '=', 'sales_content.sales_id')
        ->join('fruits', 'sales_content.fruits_id', '=', 'fruits.id')
        ->get();
    }
}
