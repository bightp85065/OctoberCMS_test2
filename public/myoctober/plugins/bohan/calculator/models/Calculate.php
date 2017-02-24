<?php namespace BoHan\Calculator\Models;

class Calculate
{

    /**
     * Sends the confirmation email to a user, after activating.
     * @param  string $code
     * @return void
     */
    
    public function plus($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)) {
            return 0;
        }
        return $number1+$number2;
    }
    
    public function minus($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)) {
            return 0;
        }
        return $number1-$number2;
    }
    
    public function multiply($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)) {
            return 0;
        }
        return $number1*$number2;
    }
    
    public function divided($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)||$number2===0) {
            return 0;
        }
        return $number1/$number2;
    }

}
