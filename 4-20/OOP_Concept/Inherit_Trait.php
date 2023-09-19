<?php

    trait Member {
        var $name = "Bob";
        public function doIt() {
            echo "I am doing it.<br>";
        }
    }

    trait Hacker {
        var $age = 20;
        public function hackIt(){
            echo "We are hacking it!<br>";
        }
    }

    trait Test {
        var $str = "Just testing.";
    } 

    trait Holder {
        use Member,Hacker,Test;
    }

    class Inherit_Trait {
        use Holder;
    }

    $obj = new Inherit_Trait();
    echo $obj->name . "<br>";
    $obj->hackIt();
    $obj->doIt();
    echo $obj->str;

?>