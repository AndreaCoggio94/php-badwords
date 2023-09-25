<?php

$paragraph = $_GET ["paragraph"] ;
$censure = $_GET ["censure"] ;
$solution = str_replace($censure, "***" , $paragraph) ;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Il paragrafo intero è :</p>
    <h1>
   <?php echo $paragraph ?>
    </h1>
    <p>Mentre con la parola censurata " <?php echo $censure ?> " è :</p>
    <h1>
        <?php echo $solution ?>
    </h1>
</body>
</html>

