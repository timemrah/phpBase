<?php require '../../sys/core/start.php';


$userModel = instanceModel::User();
$user = $userModel->getUser(1);


run::byLayout('_public');