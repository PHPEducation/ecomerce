<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/18/2018
 * Time: 7:12 AM
 */

namespace App\Repositories\Eloquents;


use App\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;

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
