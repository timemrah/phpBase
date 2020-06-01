<?php namespace model;


class User extends Model
{

    function __construct()
    {
        parent::__construct();
    }


    function getUser($userId){
        return $this->getRow('SELECT * FROM users WHERE ID=:userId', [
            'userId' => $userId
        ]);
    }


    function getUsers($piece = null, $page = null, $cols = '*', $orderBy = ''){
        return $this->getRows("SELECT {$cols} FROM users {$orderBy}");
    }


}