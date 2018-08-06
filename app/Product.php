<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
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
        return $this->morphMany(Image::class, 'imagetable');
    }

    public function dumpProducts()
    {
        return $this->hasMany(DumpProduct::class);
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
        return $query->orderBy('id', $value)->get();
    }

    public function scopeSaveImages($value)
    {
        return $this->images()->save($value);
    }
}
