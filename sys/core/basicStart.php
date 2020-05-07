<?php
ob_start();
session_start();


//SUNUCU YOLUNA GÖRE OLANLAR ÖRN: BASE_DIR
//GÖRECELİ YOL OLANLAR ÖRN: BASE_RELATIVE_DIR





$_SERVER['BASIC_START_DIR'] = str_replace('\\', '/', __DIR__);

define('BASIC_START_DIR', str_replace($_SERVER['DOCUMENT_ROOT'], '', $_SERVER['BASIC_START_DIR']));



$relativeDir           = '';
$basicStartRelativeDir = '';

$explode['basicStartDir'] = explode('/', BASIC_START_DIR);
$explode['phpSelf']       = explode('/', $_SERVER['PHP_SELF']);

foreach($explode['basicStartDir'] as $i => $part){
    if(!$part){ continue; }
    if($part === $explode['phpSelf'][$i]){
        $relativeDir .= "/$part";
    } /*else{
        $basicStartRelativeDir .= "/$part";
    }*/
}

define('BASE_DIR', substr($relativeDir,1));
echo BASE_DIR;



//IMPORT BASIC FUNCTIONS
require  '~./project/phpBase/sys/lib/php/functions.php';


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
$View['call']['html']['body'] = BASE_URL . '/sys/_public/html/emptyPage.php';
//---- DEFAULT -------------------------------------------------------------------------------------------------------//





//---- RUN SYSTEM ------------------------------------------------------------------------------------------------------
function runPage($layout = null){

    global $View; extract($View);

    $View['call']['html']['body'] = PAGE_DIR . '/view.php';

    require BASE_DIR . "/sys/layout/$layout.php";
    require BASE_DIR . "/sys/core/basicEnd.php";
}


function runLayout($layout, $bodyViewSrc = null){

    global $View; extract($View);

    if($bodyViewSrc){
        $View['call']['html']['body'] = BASE_DIR . $bodyViewSrc;
    }

    require BASE_DIR . "/sys/layout/$layout.php";
    require BASE_DIR . "/sys/core/basicEnd.php";
}
//---- RUN SYSTEM ----------------------------------------------------------------------------------------------------//