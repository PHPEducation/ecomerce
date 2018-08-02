<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = ['id'];

    public function images()
    {
        return $this->morphMany('App\Image', 'iamgetable');
    }

}
