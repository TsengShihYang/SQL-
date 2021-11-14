<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=y_ledger";
$pdo=new PDO($dsn,'root','');


$range=(isset($_GET['id']))?$_GET['id']:4;
// $range=$_GET['id'];
// $range=5;


// $sql="select * from `ledger` where `id`< $range";
$sql="select * from `ledgers` where `id`<  $range";
$rows=$pdo->query($sql)->fetchAll();

// echo $rows;
// echo "<pre>";
// print_r($rows);
// echo "<pre>";
//var_dump($rows)
// foreach($rows as $row){
//     echo $row['item']."<br>";
// }

//$pdo=new PDO('資料庫的連線資訊','帳號','密碼','[其他參數]');

?>
 <style>
    table{
        border: 3px double;
        border-collapse: collapse;
    }

    td {
        border: 1px solid black;
        padding: 5px 10px;
    }
    tr:nth-child(odd){
        background:lightgray;
    }
    tr:nth-child(even){
        background:white;
    }

</style>
<table>
    <tr>
        <td>品項</td>
        <td>花費</td>
        <td>類別</td>
        <td>付款方式</td>
        <td>店名</td>
        <td>日期</td>
    </tr>


<?php
foreach($rows as $row){
    echo "<tr>";
    echo "<td>" . $row['item']    . "</td>";
    echo "<td>" . $row['cost']  . "</td>";
    echo "<td>" . $row['kind']      . "</td>";
    echo "<td>" . $row['pay_way']      . "</td>";
    // if(mb_substr($row['national_id'],1,1)==1){
    //     echo "<td>男生</td>";
    // }else{
    //     echo "<td>女生</td>";
    // }
    echo "<td>" . $row['shop']  . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "</tr>";
}


?>
</table>