<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name',
        'cellphone',
        'laboratory_id'
    ];

    public function laboratorio(){
        return $this->belongsTo(Laboratory::class,'laboratory_id','id');
    }
}
