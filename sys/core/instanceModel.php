<?php


class instanceModel
{

    static public function User(){
        require_once BASE__SERVER_DIR . '/sys/model/Model.php';
        require_once BASE__SERVER_DIR . '/sys/model/User.php';
        return new \model\User();
    }

}