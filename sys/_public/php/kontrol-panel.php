<?php

if(empty($_SESSION)){
    direct('/sayfa/anasayfa');
    exit();
}