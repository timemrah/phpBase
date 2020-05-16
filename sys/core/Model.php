<?php
namespace sys\core;


class Model extends \sys\core\Mysql
{

    protected $db;

    public function __construct()
    {
        $this->db = new Mysql(CONFIG['database']);
    }

}