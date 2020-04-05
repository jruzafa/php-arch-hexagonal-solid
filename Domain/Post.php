<?php
namespace Domain;

final class Post {

    private $id;
    private $name;
    private $content;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function content()
    {
        return $this->content;
    }

}
