<link type="text/css" rel="stylesheet" href="sys/vendor/bootstrap-4.5.0/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
<link type="text/css" rel="stylesheet" href="sys/_public/css/basic.css" />
<link type="text/css" rel="stylesheet" href="sys/layout/<?=$layout?>/style.css" />

<? if($View['call']['css']){ foreach($View['call']['css'] as $css){ ?>
<link type="text/css" rel="stylesheet" href="<?=$css?>" />
<? }} ?>