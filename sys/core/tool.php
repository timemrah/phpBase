<?php


function prePrint($value){
    echo "<pre>" . print_r($value, 1) . "</pre>";
}


function preDump($value){
    var_dump($value);
}


function dir2Url($dir){
    return str_replace('\\', '/', $dir);
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


function jsonEchoTrue($msg = null, $code = null, $data = null){
    echo json_encode([
        'status' => true,
        'code'   => $code,
        'msg'    => $msg,
        'data'   => $data
    ]);
    return true;
}


function jsonEchoFalse($msg = null, $code = null, $data = null){
    echo json_encode([
        'status' => false,
        'code'   => $code,
        'msg'    => $msg,
        'data'   => $data
    ]);
    return false;
}


function GET($keys){
    $GET = new Stack($_GET);
    return $GET->isGet($keys);
}


function POST($keys){
    $POST = new Stack($_POST);
    return $POST->isGet($keys);
}


function GET_PositiveInt($keys, $default = 1){
    $returnValue = GET($keys);
    if(!is_numeric($returnValue) || $returnValue <= 0){
        return $default;
    }
    return (int) $returnValue;
}


function POST_PositiveInt($keys, $default = 1){
    $returnValue = POST($keys);
    if(!is_numeric($returnValue) || $returnValue <= 0){
        return $default;
    }
    return (int) $returnValue;
}


function direct($url, $outer = false){
    if($outer === false){
        header('Location: ' . BASE__HOST_DIR . $url);
    } else{
        header('Location: ' . $url);
    }
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