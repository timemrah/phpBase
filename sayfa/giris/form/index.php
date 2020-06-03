<?php require '../../../sys/core/start.php';





if(!empty($_SESSION)){
    header('Location: ' . BASE__HOST_DIR . '/kontrol-panel/anasayfa');
}

Run::byLayout();