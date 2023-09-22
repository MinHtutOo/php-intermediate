<?php
namespace app\Posts;

use app\Authors\Author;

class Post
{
    private $author, $content;

    public function __construct(Author $author, $content)
    {
        $this->author = $author;
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthor() {
        return $this->author;
    }


}

?>