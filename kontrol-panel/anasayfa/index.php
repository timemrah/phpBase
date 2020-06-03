<?php require '../../sys/core/start.php';

if(empty($_SESSION)){
    direct('/sayfa/anasayfa');
}

Run::byLayout('controlPanel');