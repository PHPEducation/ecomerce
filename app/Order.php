<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }

    public function detailOrders()
    {
        return $this->hasMany('App\DetailOrder');
    }
}
