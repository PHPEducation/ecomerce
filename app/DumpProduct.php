<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DumpProduct extends Model
{
    public $timestamps = false;
    protected $table = 'tbl_dump_products';
    protected $fillable = [
        'soluong',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
