<?php
//---- GLOBAL VARIABLES ------------------------------------------------------------------------------------------------
$View = [];
$View['data'] = [];
$View['call'] = [];
$View['call']['html'] = [];
$View['call']['css']  = [];
$View['call']['js']   = [];


//START PROCESS TIME RECORD
$startTime = microtime(1);
$View['data']['startTime'] = $startTime;


//OB START
ob_start();


//---- CREATE DIR & FILE DEFINES ---------------------------------------------------------------------------------------
$dir = [];
$dir['BASIC_START__SERVER_DIR']  = str_replace('\\', '/', __DIR__);
$dir['BASIC_START__HOST_DIR']    = str_replace($_SERVER['DOCUMENT_ROOT'], '', $dir['BASIC_START__SERVER_DIR']);
$dir['BASIC_START__HOST_BR_DIR'] = '';
$dir['BASE__HOST_DIR']           = '';

$explode['phpSelf'] = explode('/', $_SERVER['PHP_SELF']);

foreach(explode('/', $dir['BASIC_START__HOST_DIR']) as $i => $part){
    if(!$part){ continue; }
    if($part === $explode['phpSelf'][$i]){ $dir['BASE__HOST_DIR']           .= "/$part"; }
    else                                 { $dir['BASIC_START__HOST_BR_DIR'] .= "/$part"; }
}

define('BASE__HOST_DIR', $dir['BASE__HOST_DIR']);
define('BASE__SERVER_DIR', substr($dir['BASIC_START__SERVER_DIR'], 0, -(strlen($dir['BASIC_START__HOST_BR_DIR']))));

define('RUN__HOST_DIR', substr($_SERVER['REQUEST_URI'],0,-1));
define('RUN__HOST_BR_DIR', str_replace(BASE__SERVER_DIR.'/', '', dirname($_SERVER['SCRIPT_FILENAME'])));
define('RUN__SERVER_DIR', BASE__SERVER_DIR.'/'.RUN__HOST_BR_DIR);
define('RUN__SERVER_FILE', $_SERVER['SCRIPT_FILENAME']);
define('RUN__HOST_FILE',   $_SERVER['SCRIPT_NAME']);

$runHostFilePathInfo = pathinfo(RUN__HOST_FILE);
define('RUN__FILENAME', $runHostFilePathInfo['filename']);
define('RUN__FILE_EXT', $runHostFilePathInfo['extension']);
define('RUN__BASENAME', $runHostFilePathInfo['basename']);
define('RUN__FOLDERNAME', substr(strrchr($runHostFilePathInfo['dirname'], '/'),1));
//---- CREATE DIR & FILE DEFINES --------------------------------------------------------------------------------------//


//---- OTHER DEFINES ---------------------------------------------------------------------------------------------------
define('CONFIG', require BASE__SERVER_DIR . '/sys/core/config.php');
//---- OTHER DEFINES -------------------------------------------------------------------------------------------------//


//IMPORT BASIC FUNCTIONS
require BASE__SERVER_DIR . '/sys/core/tool.php';
require BASE__SERVER_DIR . '/sys/utilities/Stack.php';
require BASE__SERVER_DIR . '/sys/utilities/Html.php';
require BASE__SERVER_DIR . '/sys/core/instanceModel.php';
require BASE__SERVER_DIR . '/sys/core/Run.php';


//SESSION START
if(CONFIG['session']){ session_start(); }


//---- VIEW DEFAULT ----------------------------------------------------------------------------------------------------
$View['data']['headTitle']    = 'phpBase';
$View['call']['html']['main'] = BASE__SERVER_DIR . '/sys/_public/html/emptyPage.php';
