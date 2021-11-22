<form action="?" method="post">
    <input type="number" name="stars" >
    <input type="submit" value="send">
</form>


<?php
if(isset($_POST['stars'])){
    stars($_POST['stars']);
}

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
echo "<hr>";
?>