<?php


class Html
{

    static function isActive($value1, $value2){
        return ($value1 === $value2) ? 'active' : '';
    }


    static function isSelect($value1, $value2){
        return ($value1 === $value2) ? 'selected' : '';
    }


}