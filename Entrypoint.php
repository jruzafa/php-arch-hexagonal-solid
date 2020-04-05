<?php
require_once './vendor/autoload.php';

use Application\PostCreator;
use Infraestructure\PostRepositoryInMemory;

class Entrypoint {

    /**
     * @var PostCreator
     */
    private $postCreator;

    public function __construct( PostCreator $postCreator)
    {
        $this->postCreator = $postCreator;
    }

    public function execute(){
        echo $this->postCreator->execute();
    }

}

$entrypoint = new \Entrypoint(new PostCreator(new PostRepositoryInMemory()));
$entrypoint->execute();
