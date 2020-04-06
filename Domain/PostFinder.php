<?php
namespace Domain;

use Domain\PostRepository;

final class PostFinder {

    /**
     * @var PostRepository
     */
    private $postRepository;

    public function __construct( PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function __invoke($postId)
    {
        $post = $this->postRepository->find($postId);

        $this->checkNotExistPost($post);

        return $post;

    }

    /**
     * @param $post
     * @throws \Exception
     */
    private function checkNotExistPost( $post )
    {
        if (null === $post) {
            // TODO: Implement checkNotExistPost() method.
        }
    }


}
