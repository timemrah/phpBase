<?php
require '../../sys/core/start.php';
require BASE__SERVER_DIR . '/sys/_public/php/kontrol-panel.php';


$View['data']['headTitle'] = 'Anasayfa | ' . $View['data']['headTitle'];


Run::byLayout('controlPanel');