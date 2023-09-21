<?php

class Call_Back_Function
{
    public function doIt($var)
    {
        $i = 0;
    $sum = 0;
    while($i < 100) {
        $sum += $i;
        $i++;
    }
    $this->$var($sum);
    }

    public function finish($total)
    {
        echo "All total is {$total}";
    }

    public function donkey()
    {
        echo "I am not a donkey!";
    }

}

$ans = new Call_Back_Function();
$ans->doIt("finish");
?>