<?php require '../../sys/core/start.php';

session_destroy();
header('Location: ' . BASE__HOST_DIR);

Run::noView();
