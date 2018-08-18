<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/18/2018
 * Time: 7:04 AM
 */

namespace App\Repositories\Interfaces;


interface OrderRepositoryInterface
{
    public function all();
    public function orderBy($column, $value);
    public function take($record);
}
