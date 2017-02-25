<?php namespace Bohan\Calculator\Models;

use Model;
class Calculate extends Model
{
    private $callback;

    public function __construct(array $attributes = [])
    {
        $this->callback = array("success"=>false,"data"=>0);

        parent::__construct();
    }
    /**
     * Sends the confirmation email to a user, after activating.
     * @param  string $code
     * @return void
     */
    
    public function plus($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)) {
            return $this->callback;
        }
        $this->callback["data"]=$number1+$number2;
        return $this->callback;
    }
    
    public function minus($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)) {
            return $this->callback;
        }
        $this->callback["data"]=$number1-$number2;
        return  $this->callback;
    }
    
    public function multiply($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)) {
            return  $this->callback;
        }
        $this->callback["data"]=$number1*$number2;
        return  $this->callback;
    }
    
    public function divided($number1,$number2)
    {
        if (!isset($number1)||!isset($number2)||$number2===0) {
            return  $this->callback;
        }
        $this->callback["data"]=$number1/$number2;
        return  $this->callback;
    }

}
