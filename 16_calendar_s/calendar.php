<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上萬年曆</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        
    @import url('https://fonts.googleapis.com/css2?family=Praise&display=swap');
    
</style>
    
</head>
<body>
    <h1>線上萬年曆</h1>
    <aside>

    </aside>

<?php
    $birthday = [ '10-19' =>'生日' ];

    if (isset($_GET['month'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
    } else {
    $month = date("m");
    $year = date("Y");
    }

    $lastmonth = $month - 1;
    $lastyear = $year;
    $nextmonth = $month + 1;
    $nextyear = $year;

    if ($month == 1) {
    $lastmonth = 12;
    $lastyear = $year - 1;

    $nextmonth = $month + 1;
    $nextyear = $year;

    } else if ($month == 12) {

    $lastmonth = $month - 1;
    $lastyear = $year;

    $nextmonth = 1;
    $nextyear = $year + 1;
    }

    $oneDay = date("$year-$month-01");
    $firstblank = date("w", strtotime($oneDay));
    $monthDays = date("t", strtotime($oneDay));
    $firstWeekDays = 7 - $firstblank;
    $weeks = ceil(($firstblank + $monthDays) / 7);
    $lastWeekDays = ($firstblank + $monthDays) % 7;
    $lastblank = 7 - $lastWeekDays;
    $allCells = $weeks * 7;
    $headers = ['日曜', '月曜', '火曜', '水曜', '木曜', '金曜', '土曜'];

    for ($i = 0; $i < $firstblank; $i++) {
    $td[] = "";
    }
    for ($i = 0; $i < $monthDays; $i++) {
    $td[] = ($i + 1);
    }
    for ($i = 0; $i < $lastblank; $i++) {
    $td[] = "";
    }
?>

    <h3><?=$year;?>年<?=$month;?>月</h3>
    <div class="updown">
     <a href="calendar.php?year=<?=$lastyear;?>&month=<?=$lastmonth;?>"> <前月</a>
     <a href="calendar.php?year=<?=$nextyear;?>&month=<?=$nextmonth;?>">次月></a>
    </div>
    <div class="calendar">

    <?php

    foreach ($headers as $header) {
    echo "<div class='weekname'>";
    echo $header;
    echo "</div>";
    }

    for ($i = 0; $i < $allCells; $i++) {
        $w = $i % 7;
    if (is_numeric($td[$i])) {
        $date = date("$year-$month-") . $td[$i];
        }

    if ($w == 0 || $w == 6) {
        echo "<div class='dayoff cell'>";
        } else {
        echo "<div class='cell'>";
        }
        echo $td[$i];
    if (isset($date) && array_key_exists($date, $birthday)) {
        echo $birthday[$date];
        }
        echo "</div>";
    }
?>
</div>
</body>
</html>