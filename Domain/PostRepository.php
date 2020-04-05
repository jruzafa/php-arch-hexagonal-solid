<?php
namespace Domain;

interface PostRepository {

    public function save(Post $post);

    public function find(PostId $postId);

}

