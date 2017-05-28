<?php

$i = rand(1, 3);
$j = rand(1, 3);
$k = rand(1, 3);

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no;">

    <title>HEADER</title>

    <link rel="icon" type="image/png" href="img/fav_icon.png">

    <link type="text/css" rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="main-content">
        <div class="main-header">
        	<img class="header-img" src="img/head<?= $i ?>.png">
        	<div class="caption-marquee">
        		<marquee><stromg>LOREM IPSUM COLOR SIT DOT AMET</stromg></marquee>
        	</div>
        </div>
    </div>

    <div style="margin-top: 32px"></div>

    <div class="main-content">
        <div class="main-header">
            <img class="header-img" src="img/head<?= $j ?>.png">
            <div class="caption-marquee">
                <marquee><stromg>LOREM IPSUM COLOR SIT DOT AMET</stromg></marquee>
            </div>
        </div>
    </div>

    <div style="margin-top: 32px"></div>

    <div class="main-content">
        <div class="main-header">
            <img class="header-img" src="img/head<?= $k ?>.png">
            <div class="caption-marquee">
                <marquee><stromg>LOREM IPSUM COLOR SIT DOT AMET</stromg></marquee>
            </div>
        </div>
    </div>

    <div style="margin-top: 32px"></div>
</body>
</html>