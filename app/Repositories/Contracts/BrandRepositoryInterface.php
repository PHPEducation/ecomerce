<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/22/2018
 * Time: 1:30 AM
 */

namespace App\Repositories\Contracts;


interface BrandRepositoryInterface
{
    public function where($column = 'id', $compare = '>', $value = 0);
    public function orderBy($column = 'id', $value = 'ASC');
    public function create($attribute = []);
    public function findOrFail($id, $column = ['*']);
    public function update($attributes = [], $id);
    public function delete($id);
}
