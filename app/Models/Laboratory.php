<?php

namespace App\Models;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    protected $fillable = [
        'name',
        'nit',
        'address',
        'cellphone',
        'active'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }


    public function proveedores(){
        return $this->hasMany(Provider::class);
    }

    //Hasmany => tiene muchos
    //BelongsTo = tiene algunos
    //HasOne = 1 a 1

}
