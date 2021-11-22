<?php

// echo "<pre>";
// print_r(all('member'));
// echo "<pre>";

$rows=all('account');
// $rows=all('member');

foreach($rows as $row){
    echo $row['account']."----->".$row['mail']."<br>";
}
echo "<hr>";
// $rows_2=all('account');
$rows=all('member');

foreach($rows as $row){
    echo $row['name']."----->".$row['mobile']."<br>";
}

//取出指定資料表所有資料
function all($table){
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

    $sql="SELECT * FROM `$table`";
//   echo $sql;
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


?>