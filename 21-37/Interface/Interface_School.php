<?php
require_once "SheInter.php";
require_once "HeInter.php";

class Interface_School implements SheInter, HeInter
{
    private $data;

    public function SheGoToSchool($data)
    {
        $this->data = $data;
    }

    public function output()
    {
        echo "<pre>" . print_r($this->data, true) . "</pre>";
    }

    public function busy()
    {
        echo "This student is busy with " . $this->data[count($this->data)-1];
    }

    public function HeGoToSchool($data)
    {
        $this->data = $data;
    }
}

$girl = new Interface_School();
$sheAry = ["book","pen", "bag", "novel"];
$girl->SheGoToSchool($sheAry);
$girl->output();
$girl->busy();

$boy = new Interface_School();
$heAry = ["book","pen", "bag", "phone"];
$boy->HeGoToSchool($heAry);
$boy->output();
$boy->busy();
?>