<link type="text/css" rel="stylesheet" href="sys/vendor/bootstrap-4.5.0/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="layout/basic.css" />
<link type="text/css" rel="stylesheet" href="layout/<?=$layout?>/style.css" />

<? if($View['call']['css']){ foreach($View['call']['css'] as $css){ ?>
<link type="text/css" rel="stylesheet" href="<?=$css?>" />
<? }} ?>