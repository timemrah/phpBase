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