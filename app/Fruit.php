<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    protected $table = 'fruits';

    protected $fillable = [
        'nome'      
    ];

    public function salesContent()
    {
        return $this->hasOne(SalesContent::class,'fruits_id','id');
    }

    
}
