<?php
namespace Application;

use Domain\Post;
use Domain\PostName;
use Domain\PostRepository;

final class PostCreator {

    /**
     * @var PostRepository
     */
    private $postRepository;

    public function __construct( PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function execute(){

        $post =  Post::create(1, new PostName('hello'), '<h1>hello world content....</h1>');
        $post2 = Post::create(2, new PostName('hello 2'), '<h1>hello world content from 2....</h1>');
      //  $post2 = Post::create(2, new PostName(''), '<h1>hello world content from 2....</h1>');

        $this->postRepository->save($post);
        $this->postRepository->save($post2);

        // $this->postRepository->find(2);
        return $this->postRepository->find(1);
    }

}
