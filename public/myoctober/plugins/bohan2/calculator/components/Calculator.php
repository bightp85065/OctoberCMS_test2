<?php namespace bohan2\calculator\Components;

use Cms\Classes\ComponentBase;
use boHan2\calculator\models\Settings;
use boHan2\calculator\models\Calculate as CalculateModel;

class Calculator extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Calculator Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
//        return [];
    }

    public function onDoPlus(){
        $number1 = isset($_REQUEST["number1"])?$_REQUEST["number1"]:0;
        $number2 = isset($_REQUEST["number2"])?$_REQUEST["number2"]:0;
        return CalculateModel::plus($number1,$number2);
    }
    public function onDoMinus(){
        $number1 = isset($_REQUEST["number1"])?$_REQUEST["number1"]:0;
        $number2 = isset($_REQUEST["number2"])?$_REQUEST["number2"]:0;
        return CalculateModel::minus($number1,$number2);
    }
    public function onDoMultiply(){
        $number1 = isset($_REQUEST["number1"])?$_REQUEST["number1"]:0;
        $number2 = isset($_REQUEST["number2"])?$_REQUEST["number2"]:0;
        return CalculateModel::multiply($number1,$number2);
    }
    public function onDoDivided(){
        $number1 = isset($_REQUEST["number1"])?$_REQUEST["number1"]:0;
        $number2 = isset($_REQUEST["number2"])?$_REQUEST["number2"]:0;
        return CalculateModel::divided($number1,$number2);
    }
    
    public function onRun() {
	    $this->addJs('/plugins/bohan2/calculator/assets/js/calculator.js');
    }
}
