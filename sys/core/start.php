<?php
ob_start();


//---- CREATE DIR DEFINES ----------------------------------------------------------------------------------------------
$dir = [];
$dir['BASIC_START__SERVER_DIR'] = str_replace('\\', '/', __DIR__);
$dir['BASIC_START__HOST_DIR']   = str_replace($_SERVER['DOCUMENT_ROOT'], '', $dir['BASIC_START__SERVER_DIR']);

$relativeDir           = '';
$startRelativeDir = '';
$explode['phpSelf']    = explode('/', $_SERVER['PHP_SELF']);

foreach(explode('/', $dir['BASIC_START__HOST_DIR']) as $i => $part){
    if(!$part){ continue; }
    if($part === $explode['phpSelf'][$i]){ $relativeDir .= "/$part";}
    else{ $startRelativeDir .= "/$part"; }
}

define('BASE__HOST_DIR', $relativeDir);
define('BASIC_START__HOST_BR_DIR', $startRelativeDir);
define('BASE__SERVER_DIR', substr($dir['BASIC_START__SERVER_DIR'], 0, -(strlen(BASIC_START__HOST_BR_DIR))));
define('RUN__HOST_BR_DIR', str_replace(BASE__SERVER_DIR.'/', '', dirname($_SERVER['SCRIPT_FILENAME'])));
//---- CREATE DIR DEFINES --------------------------------------------------------------------------------------------//


//DEFINES
define('CONFIG', require BASE__SERVER_DIR . '/sys/core/config.php');


//IMPORT BASIC FUNCTIONS
require BASE__SERVER_DIR . '/sys/core/tool.php';
require BASE__SERVER_DIR . '/sys/utilities/Html.php';
require BASE__SERVER_DIR . '/sys/core/instanceModel.php';
require BASE__SERVER_DIR . '/sys/core/run.php';


//SESSION START
if(CONFIG['session']){ session_start(); }


//---- VIEW VARIABLES---------------------------------------------------------------------------------------------------
$View = [];
$View['data'] = [];
$View['call'] = [];
$View['call']['html'] = [];
$View['call']['css']  = [];
$View['call']['js']   = [];

//---- VIEW DEFAULT ----------------------------------------------------------------------------------------------------
$View['data']['headTitle']    = 'phpBase';
$View['call']['html']['main'] = BASE__SERVER_DIR . '/sys/_public/html/emptyPage.php';


//404
