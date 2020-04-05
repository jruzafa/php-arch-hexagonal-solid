<?php
namespace Infraestructure;

use Domain\Post;
use Domain\PostId;
use Domain\PostRepository;

final class PostRepositoryMysql implements PostRepository {

    public function save( Post $post )
    {
        // TODO: Implement save() method.
    }

    public function find( PostId $postId )
    {
        // TODO: Implement find() method.
    }
}
