<?php
namespace model;




class User extends \sys\core\Model
{

    function __construct()
    {
        parent::__construct();
    }


    function getUser($userId){
        return $this->db->row("SELECT * FROM users WHERE ID=:userId",['userId' => $userId]);
    }


    function getUsers($piece = null, $page = null, $cols = '*', $orderBy = ''){
        return $this->db->row("SELECT {$cols} FROM users {$orderBy}");
    }
}