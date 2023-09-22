<?php
require_once "vendor/autoload.php";
use app\Posts\Post;
use app\Authors\Author;

class Index
{
    public function __construct()
    {
        $fname = "Min";
        $lname = "Htut";
        $content = "This is the dependency injection practice that I learn from Intermediate Level.";

        $author = new Author($fname, $lname);

        $post = new Post($author, $content);
        $this->answerOut($post);
    }

    public function answerOut(Post $post) {
        $author = $post->getAuthor();
        echo $author->getFirstName() . " ";
        echo $author->getLastName() . "<br>";
        echo $post->getContent(); 
    }
}

$obj = new Index();

?>