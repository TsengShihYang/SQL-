<?php
// for($i=3;$i<12;$i=$i+2){
//     stars($i);
// }
function stars($row){
    for($j=1;$j<=$row;$j++){
        for($i=0;$i<($row-$j);$i++){
            echo "&ensp;";
        }
        for($i=0;$i<(2*$j-1);$i++){
            echo "*";
        }
        echo "<br>";
    }
}
// echo "<hr>";

stars2('R',7);

function stars2($symbol,$row){
    for($j=1;$j<=$row;$j++){
        for($i=0;$i<($row-$j);$i++){
            echo "&ensp;";
        }
        for($i=0;$i<(2*$j-1);$i++){
            echo "$symbol";
        }
        echo "<br>";
    }
}
?>