<?php


class Run
{



    static function byLayout($layout = null, $mainView = null){

        global $View; extract($View);

        if($layout === null){
            $layout = CONFIG['defaultLayout'];
        }

        self::setRunLayoutDefines($layout, '/sys/layout', BASE__SERVER_DIR . "/sys/layout/$layout");

        //SET HTML of MAIN VIEW
        if($mainView){
            $View['call']['html']['main'] = BASE__SERVER_DIR . $mainView;
        } else{
            $View['call']['html']['main'] = BASE__SERVER_DIR . '/' . RUN__HOST_BR_DIR . '/view.php';
        }

        //SET CSS of MAIN VIEW
        if(file_exists(BASE__SERVER_DIR . '/' . RUN__HOST_BR_DIR . '/style.css')){
            $View['call']['css']['main'] = RUN__HOST_BR_DIR . '/style.css';
        }

        //SET JS of MAIN VIEW
        if(file_exists(BASE__SERVER_DIR . '/' . RUN__HOST_BR_DIR . '/script.js')){
            $View['call']['js']['main'] = RUN__HOST_BR_DIR . '/script.js';
        }

        $processTime = round(microtime(1) - $View['data']['startTime'], 3);
        define('PROCESS_TIME', $processTime);

        require RUN_LAYOUT__SERVER_DIR . ".php";
        require BASE__SERVER_DIR . "/sys/core/end.php";
    }




    static function withoutLayout($mainView = null){

        global $View; extract($View);
        self::setRunLayoutDefines();

        //SET HTML of MAIN VIEW
        if($mainView){
            $View['call']['html']['main'] = BASE__SERVER_DIR . $mainView;
        } else{
            $View['call']['html']['main'] = BASE__SERVER_DIR . '/' . RUN__HOST_BR_DIR . '/view.php';
        }

        $processTime = round(microtime(1) - $View['data']['startTime'], 3);
        define('PROCESS_TIME', $processTime);

        require $View['call']['html']['main'];
        require BASE__SERVER_DIR . "/sys/core/end.php";
    }




    static function noView(){

        global $View; extract($View);
        self::setRunLayoutDefines();

        $processTime = round(microtime(1) - $View['data']['startTime'], 3);
        define('PROCESS_TIME', $processTime);

        require BASE__SERVER_DIR . "/sys/core/end.php";
    }




    private static function setRunLayoutDefines($filename = null, $hostDir = null, $serverDir = null){
        define('RUN_LAYOUT__FILENAME', $filename);
        define('RUN_LAYOUT__HOST_DIR', $hostDir);
        define('RUN_LAYOUT__SERVER_DIR', $serverDir);
    }




}