<?php
/**
 * Created by PhpStorm.
 * User: timemrah
 * Date: 17.02.2019
 * Time: 02:52
 */
namespace sys\utilities;


class Mysql
{



    protected $connection = null;
    protected $stmt = null;




    function __construct($arr)
    {
        if(!is_array($arr)){
            echo '<p>'.__METHOD__.': $arr bir dizi olmalı!</p>';
            return false;
        }

        $persistent = isset($arr['persistent']) ? $arr['persistent'] : false;

        try{
            $this->connection = new \PDO(
                "mysql:host=$arr[host];dbname=$arr[dbname];charset=$arr[charset];",
                $arr['user'], $arr['pass'], [
                    \PDO::ATTR_PERSISTENT => $persistent,
                    \PDO::ATTR_EMULATE_PREPARES => FALSE,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch(\PDOException $e){
            echo '<p>'.__METHOD__.": ".$e->getMessage().'</p>';
        }

        return true;

    }




    public function rows($sql, $params=[]){
        $stmt = $this->connection->prepare($sql);
        $this->stmt = $stmt;
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }




    public function row($sql, $params=[]){
        $stmt = $this->connection->prepare($sql);
        $this->stmt = $stmt;
        $stmt->execute($params);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }




    public function query($sql, $params=[]){
        $stmt = $this->connection->prepare($sql);
        $this->stmt = $stmt;
        $stmt->execute($params);
        return $stmt;
    }




    public function insert($table, $insertArr){

        $columns        = '';
        $valuesDelegate = '';
        $values         = [];

        foreach($insertArr as $key => $value){
            $columns        .= "$key,";
            $valuesDelegate .= '?,';
            $values[] = $value;
        }

        $columns = substr($columns,0,-1);
        $valuesDelegate  = substr($valuesDelegate, 0, -1);
        $stmt = $this->connection->prepare("INSERT INTO $table ($columns) VALUES ($valuesDelegate)");
        $this->stmt = $stmt;
        $stmt->execute($values);
        return (int) $this->connection->lastInsertId();
    }




    public function update($table, $updateArr, $whereStr = '', $params =  []){

        if(!is_array($params)){
            $params = [$params];
        }

        if(strpos($whereStr, 'WHERE') === false){
            echo '<p>'.__METHOD__.': UPDATE sql içerisinde WHERE komutu yok!'.
                'Bu tüm tablonun değiştirilmesi anlamına gelir! Bu yüzden işlem durduruldu!</p>';
            return false;
        }

        $keyValue = '';
        $values   = [];

        foreach($updateArr as $key => $value){
            $keyValue .= "$key=:$key,";
            $values[":$key"] = $value;
        }

        $keyValue = substr($keyValue,0,-1);

        if(!empty($params)){ $values   = array_merge($values, $params); }

        $stmt = $this->connection->prepare("UPDATE $table SET $keyValue $whereStr");
        $this->stmt = $stmt;
        $stmt->execute($values);
        return true;
    }




    public function delete($table, $whereStr, $params =  [], $confirm = false){

        if(strpos($whereStr, 'WHERE') === false){
            echo '<p>'.__METHOD__.': DELETE sql içerisinde WHERE komutu yok!'.
                'Bu tüm tablonun silinmemesi anlamına gelir! Bu yüzden işlem durduruldu!</p>';
            return false;
        }

        $stmt = $this->connection->prepare("DELETE FROM $table $whereStr");
        $this->stmt = $stmt;
        $stmt->execute($params);


        if(!$confirm){ return NULL; }


        //SİLİNDİMİ KONTROLÜ İSTENİYORSA
        $stmt2 = $this->connection->prepare("SELECT * FROM $table $whereStr");
        $stmt2->execute($params);
        $confirmData = $stmt2->fetch(\PDO::FETCH_ASSOC);
        if($confirmData){ return false; }
        return true;

    }




    public function getLastInsertID(){
        return $this->connection->lastInsertId();
    }




    public function getConnection(){
        return $this->connection;
    }




    public function isConnected(){
        return ($this->connection !== NULL);
    }



    public function affectedRowCount(){
        return $this->stmt->rowCount();
    }



    function __destruct(){
        //CONNECTION CLOSE
        $this->connection = NULL;
    }

}