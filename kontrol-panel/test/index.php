<?php require '../../sys/core/start.php';
require BASE__SERVER_DIR . '/sys/_public/php/kontrol-panel.php';


$View['data']['headTitle'] = 'Test | ' . $View['data']['headTitle'];


Run::byLayout('controlPanel');






/*
function uniq(){
    $microTime    = microtime(1);
    $microTimeExp = explode('.', $microTime);
    $time         = $microTimeExp[0];
    $splitSecond  = $microTimeExp[1];

    $time12       = str_pad($time, 12, '0', STR_PAD_RIGHT);
    $splitSecond4 = str_pad($splitSecond, 4, '0', STR_PAD_RIGHT);

    $tag   =  $time12.$splitSecond4;
    return base_convert($tag, 10 , 36);
}



for($i=0;$i<10;$i++){
    echo uniq().'<br />';
}

for($i=0;$i<10;$i++){
    echo uniqid().'<br />';
}*/