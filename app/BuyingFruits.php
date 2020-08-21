<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyingFruits extends Model
{
    protected $table = 'buying_fruits';

    protected $fillable = [
        'amount',
        'expiration_date',        
        'fruits_id'
    ];
}
