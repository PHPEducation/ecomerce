<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function detailOrders()
    {
        return $this->hasMany('App\DetailOrder');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imagetable');
    }

    public function scopeResult($query)
    {
        return $query->where('id', '>', 0);
    }

    public function scopeSearch($query, $value)
    {
        return $query->where('name', 'like', "%$value%");
    }

    public function scopeOrderById($query, $value)
    {
        return $query->orderBy('id', $value);
    }
}
