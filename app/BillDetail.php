<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $guarded = ['id'];

    public function bill()
    {
        return this->belongTo('App\Bill');
    }

    public function product()
    {
        return this->belongTo('App\Product');
    }
}
