<?php
namespace Domain;

final class Post {

    private $id;
    private $name;
    private $content;

    public function __construct($id, $name, $content)
    {
        $this->id = $id;
        $this->name = $name;
        $this->content = $content;
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

    public function __toString()
    {
       return sprintf('id: %s, name: %s, content: %s',$this->id, $this->name, $this->name);
    }

}
