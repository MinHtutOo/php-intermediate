<?php
class Test 
{

}
class ObjectType_Hint
{
    public function acceptType(Test $num) {
        var_dump($num);
    }
}
$t = new Test();
$type = new ObjectType_Hint();
$type->acceptType($t);

?>