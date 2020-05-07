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
function createRelativeBaseDir($dir, $phpSelf){





}
function createBaseUrl($documentRoot, $baseDir){
    $documentRoot = dir2Url($documentRoot);
    $baseDir      = dir2Url($baseDir);
    return str_replace($documentRoot, '', $baseDir);
}
function getRunningPathInfo($scriptFilename, $baseDir){
    $scriptFilename    = dir2Url($scriptFilename);
    $baseDir  = dir2Url($baseDir);
    $runningPageFile = str_replace($baseDir, '', $scriptFilename);
    return pathinfo($runningPageFile);
}




//---- AJAX RESPONSE -----------------------------------
function ajaxResTrue($msg, $code = null, $data = null){
    return ajaxRes(true, $msg, $code, $data);
}
function ajaxResFalse($msg, $code = null, $data = null){
    return ajaxRes(false, $msg, $code, $data);
}
function ajaxRes($status, $msg, $code, $data){
    return json_encode([
        'status' => true,
        'msg'    => $msg,
        'code'   => $code,
        'data'   => $data
    ]);
}
//---- AJAX RESPONSE ---------------------------------//