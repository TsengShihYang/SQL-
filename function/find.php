<form action="?" method="post">
    <input type="number" name="id" >
<input type="submit" value="send">

</form>


<?php

if(isset($_POST['id'])){
    find('member',$_POST['id']);
}


function find($table,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=member";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table` WHERE `id`='$id'";

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

}
echo "<pre>";
print_r(find('member',$_POST['id']));
echo "<pre>";
echo "<hr>";
// echo "<pre>";
// print_r(find('member',3));
// echo "<pre>";


?>