<?php namespace model;


class User extends Model
{

    function __construct()
    {
        parent::__construct();
    }


    function getUser($userId, $cols = '*'){
        return $this->getRow("SELECT {$cols} FROM users WHERE ID=:userId", [
            'userId' => $userId
        ]);
    }


    function getUserByUsername($username, $cols = '*'){
        return $this->getRow("SELECT {$cols} FROM users WHERE USERNAME=:username", [
            'username' => $username
        ]);
    }


    function getUsers($piece = null, $page = null, $cols = '*', $orderBy = ''){
        return $this->getRows("SELECT {$cols} FROM users {$orderBy}");
    }


}