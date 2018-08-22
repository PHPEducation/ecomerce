<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/22/2018
 * Time: 1:36 AM
 */

namespace App\Repositories\Eloquents;


use App\Brand;
use App\Repositories\Contracts\BrandRepositoryInterface;

class BrandRepository implements BrandRepositoryInterface
{

    public function where($column = 'id', $compare = '>', $value = 0)
    {
        return Brand::where($column, $compare, $value);
    }

    public function orderBy($column = 'id', $value = 'ASC')
    {
        return Brand::orderBy($column, $value);
    }

    public function create($attribute = [])
    {
        return Brand::create($attribute);
    }

    public function findOrFail($id, $column = ['*'])
    {
        return Brand::findOrFail($id, $column);
    }

    public function update($attributes = [], $id)
    {
        $brand = $this->findOrFail($id);
        $brand->fill($attributes);

        return $brand->save();
    }

    public function delete($id)
    {
        $brand = $this->findOrFail($id);

        return $brand->delete();
    }

    public function pluck($name = null, $id = null)
    {
        return Brand::pluck($name, $id);
    }
}
