<?php

$greet = create_function('$para1,$para2','echo "Para1 is " . $para1[0] . "<hr>Para2 is " . $para2[1];');

$greet(["one","two"], ["three", "four"]);

?>