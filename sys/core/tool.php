<?php




function prePrint($value){
    echo '<pre style="background: #fcb6d5; padding: 15px; border: 2px solid rgba(0,0,0,0.2);">' .print_r($value, 1).'</pre>';
}




function preDump($value){
    echo '<pre style="background: #fcb6d5; padding: 15px; border: 2px solid rgba(0,0,0,0.2);">';
    var_dump($value);
    echo '</pre>';
}




function dir2Url($dir){
    return str_replace('\\', '/', $dir);
}




function res($status, $msg = null, $code = null, $data = null){
    return [
        'status' => $status,
        'code'   => $code,
        'msg'    => $msg,
        'data'   => $data
    ];
}
function resTrue($msg = null, $code = null, $data = null){
    return [
        'status' => true,
        'code'   => $code,
        'msg'    => $msg,
        'data'   => $data
    ];
}
function resFalse($msg = null, $code = null, $data = null){
    return [
        'status' => false,
        'code'   => $code,
        'msg'    => $msg,
        'data'   => $data
    ];
}




function ajaxResTrue($msg = null, $code = null, $data = null){
    echo json_encode([
        'status' => true,
        'code'   => $code,
        'msg'    => $msg,
        'data'   => $data
    ]);
}
function ajaxResFalse($msg = null, $code = null, $data = null){
    echo json_encode([
        'status' => false,
        'code'   => $code,
        'msg'    => $msg,
        'data'   => $data
    ]);
}




function GET_PositiveInt($keys, $default = 1){
    $GET = new Stack($_GET);

}
function POST_PositiveInt($keys, $default = 1){

}


function getConstants(){
    return [
        'RUN__FILENAME' => RUN__FILENAME,
        'RUN__FILE_EXT' => RUN__FILE_EXT,
        'RUN__BASENAME' => RUN__BASENAME,
        'RUN__FOLDERNAME' => RUN__FOLDERNAME,
        'RUN__HOST_BR_DIR' => RUN__HOST_BR_DIR,
        'BASE__HOST_DIR' => BASE__HOST_DIR,
        'RUN__HOST_DIR' => RUN__HOST_DIR,
        'RUN__HOST_FILE' => RUN__HOST_FILE,
        'BASE__SERVER_DIR' => BASE__SERVER_DIR,
        'RUN__SERVER_DIR' => RUN__SERVER_DIR,
        'RUN__SERVER_FILE' => RUN__SERVER_FILE,
        'RUN_LAYOUT__FILENAME' => RUN_LAYOUT__FILENAME,
        'RUN_LAYOUT__HOST_DIR' => RUN_LAYOUT__HOST_DIR,
        'RUN_LAYOUT__SERVER_DIR' => RUN_LAYOUT__SERVER_DIR
    ];
}