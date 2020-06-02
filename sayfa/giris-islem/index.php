<?php require '../../sys/core/start.php';
require "./sys/utilities/Validation.php";

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;


if(!$username || strlen($username < 4)){
    ajaxRes(false, "Kullanıcı adı en az 4 karakter olmalı");
}

run::noView();