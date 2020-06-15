<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
<?php

$microTime = microtime(1);
$microTimeExp = explode('.', $microTime);

$time        = $microTimeExp[0];
$splitSecond = $microTimeExp[1];


$time12       = str_pad($time, 12, '0', STR_PAD_RIGHT);
$splitSecond4 = str_pad($splitSecond, 4, '0', STR_PAD_RIGHT);


$tag =  $time12.$splitSecond4;

echo base_convert($tag, 10 , 36);


?>
</div>
</body>
</html>