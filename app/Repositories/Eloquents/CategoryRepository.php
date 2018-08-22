<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/20/2018
 * Time: 10:04 PM
 */

namespace App\Repositories\Eloquents;


use App\Category;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function paginate($record = null, $column = ['*'])
    {
        return Category::paginate($record);
    }

    public function pluck($name = null, $id = null)
    {
        return Category::pluck($name, $id);
    }

    public function findOrFail($id, $column = ['*'])
    {
        return Category::findOrFail($id, $column);
    }

    public function create($attributes = [])
    {
        return Category::create($attributes);
    }

    public function filterByParentId($id)
    {
        return Category::filterByParentId($id);
    }

    public function where($column, $compare = null, $value)
    {
        return Category::where($column, $compare, $value);
    }
}
