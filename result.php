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
    <h2>e la sua lunghezza è : <?php echo strlen($paragraph) ?>
    </h2>
    <p>Mentre con la parola censurata " <?php echo $censure ?> " è :</p>
    <h1>
        <?php echo $solution ?>
    </h1>
    <h2>e la sua lunghezza è : <?php echo strlen($solution) ?>
    </h2>
</body>

</html>