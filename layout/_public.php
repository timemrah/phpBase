<!doctype html>
<html lang="tr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['headTitle']?></title>
    <base href="<?=BASE__HOST_DIR.'/'?>">
    <link rel="icon" type="image/png" href="file/img/logo-64.png" itemprop="thumbnailUrl"/>

    <!-- IMPORT CSS -->
    <? require RUN_LAYOUT__SERVER_DIR . '/importCss.php' ?>
    <!-- /IMPORT CSS -->


</head>
<body class="d-flex flex-column h-100">


<!-- HEADER -->
<header id="header">
    <? require RUN_LAYOUT__SERVER_DIR . '/nav.php' ?>
</header>
<!-- /HEADER -->


<!-- MAIN -->
<main id="main">
    <? require $View['call']['html']['main']; ?>
</main>
<!-- /MAIN -->


<!-- FOOTER -->
<footer id="footer" class="mt-auto py-3">
    <? require RUN_LAYOUT__SERVER_DIR . '/footer.php' ?>
</footer>
<!-- /FOOTER -->


<!-- IMPORT JS -->
<? require RUN_LAYOUT__SERVER_DIR . '/importJs.php' ?>
<!-- /IMPORT JS -->


</body>
</html>