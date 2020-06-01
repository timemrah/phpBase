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
                $delegate[$key] = [];
                $delegate = &$delegate[$key];
            }
        }

        $delegate = $setData;

    }




    function get($keys){

        $keyParts = explode('.', $keys);
        $delegate = $this->data;

        foreach($keyParts as $key){
            if(isset($delegate[$key])){
                $delegate = $delegate[$key];
                continue;
            } else{ trigger_error('Undefined Key', E_USER_ERROR); }
        }

        return $delegate;
    }

}