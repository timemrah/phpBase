<!doctype html>
<html lang="tr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['headTitle']?></title>
    <base href="<?=BASE__HOST_DIR . '/'?>">
    <link rel="icon" type="image/png" href="file/img/logo-64.png" itemprop="thumbnailUrl"/>

    <!-- IMPORT CSS -->
    <? require RUN_LAYOUT__SERVER_DIR . '/importCss.php' ?>
    <!-- /IMPORT CSS -->

</head>
<body>

<!-- awAlert -->
<? require BASE__SERVER_DIR . '/sys/_public/html/awAlert.php' ?>
<!-- awAlert -->
<!-- confirmModal -->
<? require BASE__SERVER_DIR . '/sys/_public/html/confirmModal.php' ?>
<!-- confirmModal -->

<div class="wrapper">


    <!-- SIDEBAR -->
    <div class="sidebar" data-color="rose" data-background-color="white" data-image="sys/vendor/material-dashboard-master/assets/img/sidebar-1.jpg">
        <? require RUN_LAYOUT__SERVER_DIR . '/sideBar.php' ?>
    </div>
    <!-- /SIDEBAR -->


    <!-- MAIN PANEL -->
    <div class="main-panel">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
            <? require RUN_LAYOUT__SERVER_DIR . '/navbar.php' ?>
        </nav>
        <!-- /NAVBAR -->

        <!-- CONTENT -->
        <div class="content">
            <? require $View['call']['html']['main']; ?>
        </div>
        <!-- /CONTENT -->

        <!-- FOOTER -->
        <footer class="footer">
            <? require RUN_LAYOUT__SERVER_DIR . '/footer.php' ?>
        </footer>
        <!-- /FOOTER -->

    </div>
    <!-- /MAIN PANEL -->


</div>




<!-- IMPORT JS -->
<? require RUN_LAYOUT__SERVER_DIR . '/importJs.php' ?>
<!-- /IMPORT JS -->


</body>
</html>