<?php


namespace sys\core;


class getModel
{

    static public function User(){
        require_once BASE__SERVER_DIR . '/model/User.php';
        return new \model\User();
    }

}