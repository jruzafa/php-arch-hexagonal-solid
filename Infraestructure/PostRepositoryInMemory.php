<?php
namespace Infraestructure;

use Domain\Post;
use Domain\PostId;
use Domain\PostRepository;

final class PostRepositoryInMemory implements PostRepository{

    private $posts = [];

    public function save( Post $post )
    {
        $this->posts[$post->id()] = $post;
    }

    public function find( $postId )
    {
        return $this->posts[$postId];
    }
}
