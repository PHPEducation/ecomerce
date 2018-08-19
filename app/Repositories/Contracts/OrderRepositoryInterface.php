<?php

namespace App\Repositories\Contracts;


interface OrderRepositoryInterface
{
    public function all();
    public function orderBy($column, $value);
    public function take($record);
}
