<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/18/2018
 * Time: 7:09 AM
 */

namespace App\Repositories\Eloquents;


use App\Repositories\Interfaces\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{

    public function all()
    {
        return User::all();
    }
}
