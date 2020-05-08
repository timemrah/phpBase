<?php
ob_start();
session_start();


$relativeDir           = '';
$basicStartRelativeDir = '';
$explode['phpSelf']    = explode('/', $_SERVER['PHP_SELF']);


define('BASIC_START_LOCAL_DIR', str_replace('\\', '/', __DIR__));
define('BASIC_START_DIR', str_replace($_SERVER['DOCUMENT_ROOT'], '', BASIC_START_LOCAL_DIR));

foreach(explode('/', BASIC_START_DIR) as $i => $part){
    if(!$part){ continue; }
    if($part === $explode['phpSelf'][$i]){ $relativeDir .= "/$part";}
    else{ $basicStartRelativeDir .= "/$part"; }
}

define('BASE_DIR', $relativeDir);
define('BASIC_START_RELATIVE_DIR', $basicStartRelativeDir);
define('BASE_LOCAL_DIR', substr(BASIC_START_LOCAL_DIR, 0, -(strlen(BASIC_START_RELATIVE_DIR))));


$echo = [
    'BASIC_START_LOCAL_DIR' => BASIC_START_LOCAL_DIR,
    'BASIC_START_DIR' => BASIC_START_DIR,
    'BASIC_START_RELATIVE_DIR' => BASIC_START_RELATIVE_DIR,
    'BASE_DIR' => BASE_DIR,
    'BASE_LOCAL_DIR' => BASE_LOCAL_DIR,
    'SERVER' => $_SERVER
];
echo "<pre>".print_r($echo, 1)."</pre>";



//IMPORT BASIC FUNCTIONS
require  BASE_LOCAL_DIR.'/sys/lib/php/functions.php';


//---- DEFINE ----------------------------------------------------------------------------------------------------------


/*define('BASE_URL',  createBaseUrl($_SERVER['DOCUMENT_ROOT'], BASE_DIR));
define('PAGE_DIR',  pathinfo($_SERVER['SCRIPT_FILENAME'])['dirname']);
define('BASE_PATH_INFO', getRunningPathInfo($_SERVER['SCRIPT_FILENAME'], BASE_DIR));
define('PAGE_PATH', BASE_PATH_INFO['dirname']);
define('PAGE_VIEW_SRC', PAGE_PATH.'/view.php');*/



//---- DEFINE --------------------------------------------------------------------------------------------------------//


//---- VIEW SETTINGS ---------------------------------------------------------------------------------------------------
$View = [];
$View['data'] = [];
$View['call'] = [];
$View['call']['html'] = [];
//---- VIEW SETTINGS -------------------------------------------------------------------------------------------------//


//---- DEFAULT ---------------------------------------------------------------------------------------------------------
$View['data']['headTitle']    = 'phpBase';
$View['call']['html']['body'] = BASE_LOCAL_DIR . '/sys/_public/html/emptyPage.php';
//---- DEFAULT -------------------------------------------------------------------------------------------------------//





//---- RUN SYSTEM ------------------------------------------------------------------------------------------------------
function runPage($layout = null){

    global $View; extract($View);

    $View['call']['html']['body'] = BASE_LOCAL_DIR . '/view.php';

    require BASE_DIR . "/sys/layout/$layout.php";
    require BASE_DIR . "/sys/core/basicEnd.php";
}


function runLayout($layout, $bodyViewSrc = null){

    global $View; extract($View);

    if($bodyViewSrc){
        $View['call']['html']['body'] = BASE_LOCAL_DIR . $bodyViewSrc;
    }

    require BASE_DIR . "/sys/layout/$layout.php";
    require BASE_DIR . "/sys/core/basicEnd.php";
}
//---- RUN SYSTEM ----------------------------------------------------------------------------------------------------//