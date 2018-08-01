<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function categories()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }
}
