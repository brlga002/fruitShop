<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesContent extends Model
{
    protected $table = 'sales_content';

    protected $fillable = [
        'amount',
        'sales_id',        
        'fruits_id'
    ];
}
