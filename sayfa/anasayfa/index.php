<?php require '../../sys/core/start.php';


$userModel = instanceModel::User();
$user = $userModel->getUser(1);


$View['member'] = new Stack([
    "ad"    => "Emrah",
    "soyad" => "Tunçel",
    "cocuk" => [
        0 => [
            "ad" => "Eylül",
            "soyad" => "Tunçel"
        ]
    ]
]);

$View['member']->set('deneme', 'Veri');


run::byLayout('_public');