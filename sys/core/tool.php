<?php




function prePrint($value){
    echo '<pre style="background: #ff9ac7;">' .print_r($value, 1).'</pre>';
}




function preDump($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}




function dir2Url($dir){
    return str_replace('\\', '/', $dir);
}




function ajaxRes($status, $msg, $code, $data){
    return json_encode([
        'status' => true,
        'msg'    => $msg,
        'code'   => $code,
        'data'   => $data
    ]);
}




function getConstants(){
    return [

        'BASIC_START__SERVER_DIR' => BASIC_START__SERVER_DIR,
        'BASIC_START__HOST_DIR' => BASIC_START__HOST_DIR,
        'BASIC_START__HOST_BR_DIR' => BASIC_START__HOST_BR_DIR,

        'BASE__SERVER_DIR' => BASE__SERVER_DIR,
        'BASE__HOST_DIR' => BASE__HOST_DIR,


        'RUN__HOST_BR_DIR' => RUN__HOST_BR_DIR,
        'RUN_LAYOUT__SERVER_DIR' => RUN_LAYOUT__SERVER_DIR,

        'RUN__SERVER_FILE' => $_SERVER['SCRIPT_FILENAME'],
        'RUN__HOST_FILE' => $_SERVER['SCRIPT_NAME'],

    ];
}
