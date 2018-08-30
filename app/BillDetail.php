<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $guarded = ['id'];
    protected $table = 'bill_detail';
    public function bill()
    {
        return $this->belongsTo('App\Bill');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
