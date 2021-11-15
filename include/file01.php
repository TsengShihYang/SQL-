<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>測試include及require</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include "header.html"; ?>
<?php include "nav.php"; ?>

    <div class="body">
        file01的內容

    </div>
    <?php include "footer.php";?>
</body>

</html>