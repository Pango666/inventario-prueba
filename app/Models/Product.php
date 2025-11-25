<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'sku',
        'quantity',
        'laboratory_id',
        'image',
        'presentation'
    ];

    public function laboratory(){
        return $this->belongsTo(Laboratory::class,'laboratory_id','id');
    }
}
