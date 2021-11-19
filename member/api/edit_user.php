<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$id=$_POST['id'];
$addr=$_POST['address'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$birthday=$_POST['birthday'];

$sql_account="UPDATE `account` SET `mail`='$mail' WHERE `id`='$id'"; 
  
$sql_member="UPDATE  `member` SET `address`='$addr',`mobile` = '$mobile', `birthday`='$birthday'
WHERE  `id`='$id'";

$pdo->exec($sql_account);
$pdo->exec($sql_member);

header("location:../memcenter.php");
?>