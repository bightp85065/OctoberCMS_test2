<?php namespace Bohan\Calculator\Models;

use Model;
class Calculate extends Model
{
    public $callback = array("success"=>false,"data"=>0);

    /**
     * Sends the confirmation email to a user, after activating.
     * @param  string $code
     * @return void
     */
    
    public static function plus($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)) {
            return $callback;
        }
        $callback["data"]=$number1+$number2;
        return $callback;
    }
    
    public static function minus($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)) {
            return $callback;
        }
        $callback["data"]=$number1-$number2;
        return $callback;
    }
    
    public static function multiply($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)) {
            return $callback;
        }
        $callback["data"]=$number1*$number2;
        return $callback;
    }
    
    public static function divided($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)||$number2===0) {
            return $callback;
        }
        $callback["data"]=$number1/$number2;
        return $callback;
    }

}
