<?php

namespace App\Repositories\Eloquents;

use App\Post;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{

    public function all()
    {
        return Post::all();
    }
}
