<?php


class Stack
{

    private $data;




    public function __construct($data = null)
    {
        $this->data = $data;
    }




    public function set($keys, $setData){

        $keyParts = explode('.', $keys);
        $delegate = &$this->data;

        foreach($keyParts as $key){
            if(isset($delegate[$key])){
                $delegate = &$delegate[$key];
                continue;
            } else{
                if($key === ''){
                    $delegate = &$delegate[];
                } else{
                    $delegate = &$delegate[$key];
                }
            }
        }

        $delegate = $setData;

    }




    public function get($keys){

        $keyParts = explode('.', $keys);
        $delegate = $this->data;

        foreach($keyParts as $key){
            if(isset($delegate[$key])){
                $delegate = $delegate[$key];
                continue;
            } else{
                trigger_error('Undefined Key', E_USER_ERROR);
            }
        }

        return $delegate;
    }




    public function isSet($keys){
        $keyParts = explode('.', $keys);
        $delegate = $this->data;

        foreach($keyParts as $key){
            if(isset($delegate[$key])){
                $delegate = $delegate[$key];
                continue;
            } else{
                return false;
            }
        }

        return true;
    }




    public function isGet($keys){
        $keyParts = explode('.', $keys);
        $delegate = $this->data;

        foreach($keyParts as $key){
            if(isset($delegate[$key])){
                $delegate = $delegate[$key];
                continue;
            } else{ return null; }
        }

        return $delegate;
    }




    public function getData(){
        return $this->data;
    }


}