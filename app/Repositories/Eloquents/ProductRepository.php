<?php

namespace App\Repositories\Eloquents;

use App\Image;
use App\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    public function all()
    {
        return Product::all();
    }

    public function where($column = 'id', $compare = '>', $value = 0)
    {
        return Product::where($column, $compare, $value);
    }

    public function orderBy($column = 'id', $value = 'ASC')
    {
        return Product::orderBy($column, $value);
    }

    public function create($attribute = [])
    {
        return Product::create($attribute);
    }

    public function findOrFail($id, $column = ['*'])
    {
        return Product::findOrFail($id, $column);
    }

    public function update($attributes = [], $id)
    {
        $product = $this->findOrFail($id);
        $product->fill($attributes);

        return $product->save();
    }

    public function delete($id)
    {
        $product = $this->findOrFail($id);
        $product->images()->delete();
        return $product->delete();
    }

    public function saveImages($fName)
    {
        $img = new Image();
        $img->link = $fName;

        return Product::images()->save($img);
    }

    public function store()
    {
        // TODO: Implement store() method.
    }
}
