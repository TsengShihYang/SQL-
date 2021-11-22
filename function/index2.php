<?php

add(4,5);
echo "<br>";
echo add(4,5)+10;
echo "<br>";
$result=add(4,5);
echo $result+10;
echo "<br>";
echo "res=".$result;

function add($a,$b){
    echo $a+$b;
    return $a+$b;
}
echo "<br>";
hello (' young');
function hello($name){
    echo "hello" .$name;
    return $name;
}


?>