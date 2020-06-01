<?php


class Stack
{

    private $data;


    public function __construct($data = null)
    {
        $this->data = $data;
    }



    public function set($data){
        $this->data = $data;
    }

    public function get($keys){
        return accessByDot($keys, $this->data);
    }


}