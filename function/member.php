<?php  include_once "db.php";?>

<?php
$mem=find('member',5);
echo $mem['name'];
?>