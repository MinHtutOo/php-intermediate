<?php

namespace app;

class Member
{
    private $isAuth = false;
    private $detailInfo = [
        "name" => "Bruce",
        "age" => 20,
        "school" => "Yangon"
    ];

    public function getDetailInfo($args)
    {
        return $args;
    }

    public function setAuth($bol)
    {
        $this->isAuth = $bol;
    }

    public function getAuth()
    {
        return $this->isAuth;
    }
}

?>