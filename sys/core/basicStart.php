<?php
ob_start();
session_start();


//---- CREATE DIR DEFINES ----------------------------------------------------------------------------------------------
define('BASIC_START_LOCAL_DIR', str_replace('\\', '/', __DIR__));
define('BASIC_START_DIR', str_replace($_SERVER['DOCUMENT_ROOT'], '', BASIC_START_LOCAL_DIR));

$relativeDir           = '';
$basicStartRelativeDir = '';
$explode['phpSelf']    = explode('/', $_SERVER['PHP_SELF']);

foreach(explode('/', BASIC_START_DIR) as $i => $part){
    if(!$part){ continue; }
    if($part === $explode['phpSelf'][$i]){ $relativeDir .= "/$part";}
    else{ $basicStartRelativeDir .= "/$part"; }
}

define('BASE_DIR', $relativeDir);
define('BASIC_START_RELATIVE_DIR', $basicStartRelativeDir);
define('BASE_LOCAL_DIR', substr(BASIC_START_LOCAL_DIR, 0, -(strlen(BASIC_START_RELATIVE_DIR))));
define('RUN_RELATIVE_DIR', str_replace(BASE_LOCAL_DIR, '', dirname($_SERVER['SCRIPT_FILENAME'])));
//---- CREATE DIR DEFINES --------------------------------------------------------------------------------------------//




//IMPORT BASIC FUNCTIONS
require  BASE_LOCAL_DIR.'/sys/lib/php/functions.php';



//prePrint(get_defined_constants());

//---- VIEW SETTINGS ---------------------------------------------------------------------------------------------------
$View = [];
$View['data'] = [];
$View['call'] = [];
$View['call']['html'] = [];


//---- DEFAULT ---------------------------------------------------------------------------------------------------------
$View['data']['headTitle']    = 'phpBase';
$View['call']['html']['body'] = BASE_LOCAL_DIR . '/sys/_public/html/emptyPage.php';
//---- DEFAULT -------------------------------------------------------------------------------------------------------//





//---- RUN SYSTEM ------------------------------------------------------------------------------------------------------
function runPage($layout = null){

    global $View; extract($View);

    $View['call']['html']['body'] = BASE_LOCAL_DIR . '/view.php';

    require BASE_LOCAL_DIR . "/sys/layout/$layout.php";
    require BASE_LOCAL_DIR . "/sys/core/basicEnd.php";
}


function runLayout($layout, $bodyViewSrc = null){

    global $View; extract($View);

    if($bodyViewSrc){
        $View['call']['html']['body'] = BASE_LOCAL_DIR . $bodyViewSrc;
    }

    require BASE_LOCAL_DIR . "/sys/layout/$layout.php";
    require BASE_LOCAL_DIR . "/sys/core/basicEnd.php";
}
//---- RUN SYSTEM ----------------------------------------------------------------------------------------------------//