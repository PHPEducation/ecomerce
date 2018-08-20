<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

     public function billDetails()
    {
        return $this->hasMany('App\BillDetail');
    }

    public function category()
    {
        return $this->belongsTo('App\category');
    }
}
