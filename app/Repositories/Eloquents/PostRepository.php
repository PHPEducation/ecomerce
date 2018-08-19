<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/18/2018
 * Time: 7:10 AM
 */

namespace App\Repositories\Eloquents;


use App\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{

    public function all()
    {
        return Post::all();
    }
}
