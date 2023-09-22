<?php
namespace app\Authors;
class Author
{
    private $fname,$lname;

    public function __construct($fname,$lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function getFirstName()
    {
        return $this->fname;
    }

    public function getLastName()
    {
        return $this->lname;
    }
}

?>