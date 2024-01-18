<?php

namespace App\Repository;

use App\Model\Database;
use App\Model\Post;

class PostRepository extends Database
{
    public function create(Post $post)
    {
        var_dump($post);
    }
}