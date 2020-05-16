<?php




function runLayout($layout, $mainView = null){

    global $View; extract($View);
    define('RUN_LAYOUT__SERVER_DIR', BASE__SERVER_DIR . "/layout/$layout");

    if($mainView){
        $View['call']['html']['main'] = BASE__SERVER_DIR . $mainView;
    } else{
        $View['call']['html']['main'] = BASE__SERVER_DIR . RUN__HOST_BR_DIR . '/view.php';
    }

    require RUN_LAYOUT__SERVER_DIR . ".php";
    require BASE__SERVER_DIR . "/sys/core/basicEnd.php";
}




function runWithoutLayout(){
    define('RUN_LAYOUT__SERVER_DIR', null);
    require BASE__SERVER_DIR . "/sys/core/basicEnd.php";
}