<?php

function add(...$arg){
$sum=0;
foreach ($arg as $num){
    if(is_numeric($num)){
        $sum+=$num;
    }
}
return $sum;
}

add(1,2);
echo "<hr>";
add(1,2,3,4);
echo "<hr>";
add(1,2);
echo "<hr>";
add(1,2,3,4);
echo "<hr>";




?>