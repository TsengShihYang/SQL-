<?php
// function pdo($db){
//     $dsn="mysql:host=localhost;charset=utf8;dbname=$db";
//     return $pdo=new PDO($dsn,'root','');


        // $dsn="mysql:host=localhost;charset=utf8;dbname=member";
        // return $pdo=new PDO($dsn,'root','');

        function find($table,$id){
            global $pdo;
            $sql="SELECT * FROM `$table` WHERE `id`='$id'";
            return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        }

        function all($table){
            global $pdo;
                $sql="SELECT * FROM `$table`";
                $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                return $rows;
            }
            // update 函式設計
            // 1.指定資料表 $table "字串"
            // 2.指定更新欄位    ??
            // 3.指定更新條件    ??
            // 4. ???
 $array=['col1'=>'val1',
 'col2'=>'val2',
 'col3'=>'val3'];
 $sql="";
foreach ($array as $key => $value) {
    echo 'before loop ==> ' .$sql.'<br>';
    $sql=$sql."`$key`='$value',";
    echo 'after loop ==> ' .$sql.'<br>';

}
echo "<br>";
echo $sql;
echo "<br>";
echo "complete loop ==>".trim($sql,",");

$array=['col1'=>'val1',
'col2'=>'val2',
'col3'=>'val3'];
$sql="";
foreach ($array as $key => $value) {
   echo 'before loop ==> ' .$sql.'<br>';
   $sql=$sql."`$key`='$value' AND ";
   echo 'after loop ==> ' .$sql.'<br>';

}

echo "<br>";
echo $sql;
echo "<br>";
echo "complete loop ==>".mb_substr($sql,0,mb_strlen($sql)-5);
            
function update($table,$column,$where){
    global $pdo;
    $sql="UPDATE `$table` SET ['col1'=>'val1','col2'=>'val2','col3'=>'val3']
                   WHERE `col1`='val1' AND `col2`='val2' AND `col3`='val3' ";

}            

?>