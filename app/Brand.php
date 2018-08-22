<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function scopeSearch($query, $value)
    {
        return $query->where('name', 'like', "%$value%");
    }

    public function scopeOrderById($query, $value)
    {
        return $query->orderBy('id', $value);
    }

    public function scopeResult($query)
    {
        return $query->where('id', '>', 0);
    }
}
