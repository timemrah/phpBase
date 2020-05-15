<?php
ob_start();
session_start();


//---- CREATE DIR DEFINES ----------------------------------------------------------------------------------------------
define('BASIC_START__SERVER_DIR', str_replace('\\', '/', __DIR__));
define('BASIC_START__HOST_DIR', str_replace($_SERVER['DOCUMENT_ROOT'], '', BASIC_START__SERVER_DIR));

$relativeDir           = '';
$basicStartRelativeDir = '';
$explode['phpSelf']    = explode('/', $_SERVER['PHP_SELF']);

foreach(explode('/', BASIC_START__HOST_DIR) as $i => $part){
    if(!$part){ continue; }
    if($part === $explode['phpSelf'][$i]){ $relativeDir .= "/$part";}
    else{ $basicStartRelativeDir .= "/$part"; }
}

define('BASE__HOST_DIR', $relativeDir);
define('BASIC_START__HOST_BR_DIR', $basicStartRelativeDir);
define('BASE__SERVER_DIR', substr(BASIC_START__SERVER_DIR, 0, -(strlen(BASIC_START__HOST_BR_DIR))));
define('RUN__HOST_BR_DIR', str_replace(BASE__SERVER_DIR, '', dirname($_SERVER['SCRIPT_FILENAME'])));
//---- CREATE DIR DEFINES --------------------------------------------------------------------------------------------//


//IMPORT BASIC FUNCTIONS
require  BASE__SERVER_DIR . '/sys/lib/php/tools.php';
require BASE__SERVER_DIR . '/sys/core/functions.php';
require BASE__SERVER_DIR . '/sys/lib/php/class/Html.php';


//---- VIEW SETTINGS ---------------------------------------------------------------------------------------------------
$View = [];
$View['data'] = [];
$View['call'] = [];
$View['call']['html'] = [];
//---- VIEW DEFAULT ----------------------------------------------------------------------------------------------------
$View['data']['headTitle']    = 'phpBase';
$View['call']['html']['main'] = BASE__SERVER_DIR . '/sys/_public/html/emptyPage.php';
//---- VIEW DEFAULT --------------------------------------------------------------------------------------------------//