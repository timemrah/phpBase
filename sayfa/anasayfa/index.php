<?php require '../../sys/core/start.php';


$userModel = instanceModel::User();
$user = $userModel->getUser(1);


$member = new Stack([
    "ad"    => "Emrah",
    "soyad" => "Tunçel",
    "cocuk" => [
        0 => [
            "ad" => "Eylül",
            "soyad" => "Tunçel"
        ]
    ]
]);


echo $member->get("cocuk.0.soyad");



run::byLayout('_public');