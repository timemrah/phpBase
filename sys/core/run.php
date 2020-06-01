<?php


class run{




    static function byLayout($layout, $mainView = null){

        global $View; extract($View);
        self::setRunLayoutDefines($layout, '/layout', BASE__SERVER_DIR . "/layout/$layout");

        //SET HTML of MAIN VIEW
        if($mainView){
            $View['call']['html']['main'] = BASE__SERVER_DIR . $mainView;
        } else{
            $View['call']['html']['main'] = BASE__SERVER_DIR .'/'. RUN__HOST_BR_DIR . '/view.php';
        }

        //SET CSS of MAIN VIEW
        if(file_exists(BASE__SERVER_DIR .'/'. RUN__HOST_BR_DIR . '/style.css')){
            $View['call']['css']['main'] = RUN__HOST_BR_DIR . '/style.css';
        }

        //SET JS of MAIN VIEW
        if(file_exists(BASE__SERVER_DIR .'/'. RUN__HOST_BR_DIR . '/script.js')){
            $View['call']['js']['main'] = RUN__HOST_BR_DIR . '/script.js';
        }

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
            $View['call']['html']['main'] = BASE__SERVER_DIR .'/'. RUN__HOST_BR_DIR . '/view.php';
        }

        require $View['call']['html']['main'];
        require BASE__SERVER_DIR . "/sys/core/end.php";
    }




    static function noView(){
        self::setRunLayoutDefines();
        require BASE__SERVER_DIR . "/sys/core/end.php";
    }




    private static function setRunLayoutDefines($filename = null, $hostDir = null, $serverDir = null){
        define('RUN_LAYOUT__FILENAME', $filename);
        define('RUN_LAYOUT__HOST_DIR', $hostDir);
        define('RUN_LAYOUT__SERVER_DIR', $serverDir);
    }




}