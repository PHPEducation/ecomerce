<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/20/2018
 * Time: 10:00 PM
 */

namespace App\Repositories\Contracts;


interface CategoryRepositoryInterface
{
    public function paginate($record = null, $column = ['*']);
    public function pluck($name, $id);
    public function findOrFail($id, $column = ['*']);
    public function create($attributes = []);
    public function filterByParentId($id);
    public function where($column, $compare = null, $value);
}
