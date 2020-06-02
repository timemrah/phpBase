<?php


class Validation
{

    public static function minStrLen($value, $min, $title, $nullable = false){

        if(empty($value)){
            if(!$nullable){
                return resFalse("{$title} değeri boş olamaz.", "null");
            }
            return resTrue(null, "null");
        }

        if(mb_strlen($value, 'utf8') < $min){
            return resFalse("{$title} değeri en az {$min} karakter olabilir.");
        }
        return resTrue();
    }


    public static function maxStrLen($value, $max, $title, $nullable = false){

        if(empty($value)){
            if(!$nullable){
                return resFalse("{$title} değeri boş olamaz.", "null");
            }
            return resTrue(null, "null");
        }

        if(mb_strlen($value, 'utf8') > $max){
            return resFalse("{$title} değeri en fazla {$max} karakter olabilir.");
        }
        return resTrue();
    }


    public static function betweenStrLen($value, $min, $max, $title, $nullable = false){

        if(empty($value)){
            if(!$nullable){
                return resFalse("{$title} değeri boş olamaz.", "null");
            }
            return resTrue(null, "null");
        }

        if(mb_strlen($value, 'utf8') < $min && mb_strlen($value, 'utf8') > $max){
            return resFalse("{$title} değeri en az {$min} en fazla {$max} karakter olabilir.");
        }
        return resTrue();
    }




    public static function minInt($title, $value, $min, $nullable = false){

        if($value === null){
            if(!$nullable){ return resFalse("{$title} değeri boş olamaz.", "null"); }
            return resTrue(null, "null");
        } else if(!is_numeric($value)){
            return resFalse("{$title} değeri sayı olabilir.");
        }

        if($value < $min){
            return resFalse("{$title} değeri en az {$min} olabilir.");
        }
        return resTrue();
    }


    public static function maxInt($title, $value, $max, $nullable = false){

        if($value === null){
            if(!$nullable){ return resFalse("{$title} değeri boş olamaz.", "null"); }
            return resTrue(null, "null");
        } else if(!is_numeric($value)){
            return resFalse("{$title} değeri sayı olabilir.");
        }

        if($value > $max){
            return resFalse("{$title} değeri en fazla {$max} olabilir.");
        }
        return resTrue();
    }


    public static function betweenInt($title, $value, $min, $max, $nullable = false){

        if($value === null){
            if(!$nullable){ return resFalse("{$title} değeri boş olamaz.", "null"); }
            return resTrue(null, "null");
        } else if(!is_numeric($value)){
            return resFalse("{$title} değeri sayı olabilir.");
        }

        if($value < $min && $value > $max){
            return resFalse("{$title} değeri en az {$min} en fazla {$max} olabilir.");
        }
        return resTrue();
    }


}