<?php require '../../../sys/core/start.php';
require  BASE__SERVER_DIR . "/sys/utilities/Validation.php";

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

$validation['username'] = Validation::betweenStrLen($username, 4, 100, 'kullanıcı adı');
if(!$validation['username']['status']){
    return jsonEchoFalse($validation['username']['msg'], $validation['username']['code']);
}

$validation['password'] = Validation::betweenStrLen($password, 8, 32, 'şifre');
if(!$validation['password']){
    return jsonEchoFalse($validation['password']['msg'], $validation['password']['code']);
}

$userModel = instanceModel::User();

$user = $userModel->getUserByUsername($username);
if(!$user){
    return jsonEchoFalse('Böyle bir kullanıcı bulunamadı.', 'userNotExist');
}

if($user['PASSWORD'] !== $password){
    return jsonEchoFalse('Şifre yanlış.', 'wrongPassword');
}

$_SESSION['id']      = $user['ID'];
$_SESSION['name']    = $user['_NAME_'];
$_SESSION['surname'] = $user['SURNAME'];
$_SESSION['email']   = $user['EMAIL'];

jsonEchoTrue('Giriş başarılı', 'success');
Run::noView();