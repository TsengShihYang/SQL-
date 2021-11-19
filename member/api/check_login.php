<?php
session_start();
// $account=$_POST['account'];
// $password=$_POST['password'];

$sql="SELECT COUNT(*) FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";

echo $sql;
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

// $result=$pdo->query($sql);
// var_dump($result);
// echo "<br>";
$result=$pdo->query($sql)->fetchColumn();
// var_dump($result);

// echo $result['account'];
// echo $result['password'];
echo $result;
if($result>0){

    $_SESSION['user']=
    header("location:../memcenter.php?=user".$_POST['account']);
    // header("location:../memcenter.php?user".$_POST['account']);
}else{
    header('location:../index.php?err=1');
}

?>