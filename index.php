<?php

$i = rand(1, 3);
if ($i == 1) {
    $j = $i+1;
    $k = $i+2;
} else if ($i == 2) {
    $j = $i-1;
    $k = $i+1;   
} else {
    $j = $i-1;
    $k = $i-2;   
}

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
    <div class="container fluid-xs">
        <div class="main-header">
        	<img class="header-img" src="img/head<?= $i ?>.png">
        	<div class="caption-marquee">
        		<marquee>LOREM IPSUM COLOR SIT DOT AMET, <strong>LOREM IPSUM COLOR SIT DOT AMET</strong></marquee>
        	</div>
        </div>
    </div>

    <div style="margin-top: 32px"></div>

    <div class="container fluid-xs">
        <div class="main-header">
            <img class="header-img" src="img/head<?= $j ?>.png">
            <div class="caption-marquee">
                <marquee>LOREM IPSUM COLOR SIT DOT AMET, <strong>LOREM IPSUM COLOR SIT DOT AMET</strong></marquee>
            </div>
        </div>
    </div>

    <div style="margin-top: 32px"></div>

    <div class="container fluid-xs">
        <div class="main-header">
            <img class="header-img" src="img/head<?= $k ?>.png">
            <div class="caption-marquee">
                <marquee>LOREM IPSUM COLOR SIT DOT AMET, <strong>LOREM IPSUM COLOR SIT DOT AMET</strong></marquee>
            </div>
        </div>
    </div>

    <div style="margin-top: 32px"></div>
</body>
</html>