<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function billdetails()
    {
        return $this->hasMany('App\BillDetail');
    }
}
