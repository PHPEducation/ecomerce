<?php

namespace App\Repositories\Eloquents;

use App\Order;
use App\Repositories\Contracts\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{

    public function all()
    {
        return Order::all();
    }

    public function orderBy($column, $value)
    {
        return Order::orderBy($column, $value);
    }

    public function take($record)
    {
        return Order::take($record);
    }
}
