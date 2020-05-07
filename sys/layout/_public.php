<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['headTitle']?></title>
    <base href="<?=BASE_URL.'/'?>">
    <? require BASE_DIR . '/sys/layout/_public/importCss.php' ?>
</head>
<body>

<header></header>
<main><? require $View['call']['html']['body']; ?></main>
<footer></footer>

<? require BASE_DIR . '/sys/layout/_public/importJs.php' ?>
</body>
</html>