<?php
namespace sys\core;


class Model
{

    protected static $db;
    protected $stmt;

    public function __construct()
    {
        if(!self::$db){
            $profile  = CONFIG['dbProfiles'][0];
            $pdoDsn   = "mysql:host={$profile['host']};dbname={$profile['dbname']};charset={$profile['charset']}";

            try{ self::$db = new \PDO( $pdoDsn, $profile['user'], $profile['pass']); }
            catch(\PDOException $e){
                prePrint($e->getMessage());
                exit();
            }

        }

    }


    protected function prepare($sql){
        $this->stmt = self::$db->prepare($sql);
    }


    protected function fetch($param){
        $this->stmt->execute($param);
        return $this->stmt->fetch(\PDO::FETCH_ASSOC);
    }


    protected function fetchAll($param){
        $this->stmt->execute($param);
        return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    protected function getRow($sql, $param){
        $this->prepare($sql);
        $this->stmt->execute($param);
        return $this->stmt->fetch(\PDO::FETCH_ASSOC);
    }


    protected function getRows($sql, $param){
        $this->prepare($sql);
        $this->stmt->execute($param);
        return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


}