<?php

namespace App\Repositories\Contracts;


interface ProductRepositoryInterface
{
    public function all();
    public function where($column = 'id', $compare = '>', $value = 0);
    public function orderBy($column = 'id', $value = 'ASC');
    public function create($attribute = []);
    public function findOrFail($id, $column = ['*']);
    public function update($attributes = [], $id);
    public function delete($id);
    public function saveImages($fName);
    public function store();
}
