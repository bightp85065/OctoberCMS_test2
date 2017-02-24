<?php namespace BoHan\Calculator\Components;
use Cms\Classes\ComponentBase;
use BoHan\Calculator\Models\Settings;
use BoHan\Calculator\Models\Calculate as CalculateModel;
class CalButton extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'CalButton',
            'description' => 'Add a snipcart product to your page'
        ];
    }
    public function defineProperties()
    {
        return [
            'id' => [
                'description'       => 'The desired id of your product',
                'title'             => 'Id',
            ],
            'name' => [
                'description'       => 'Calculator',
                'title'             => 'Name',
            ],
            'description' => [
                'description'       => 'The description of your product',
                'title'             => 'Description',
            ],
            
            'plusId' => [
                'description'       => 'The plus id',
                'title'             => 'plusId',
            ],
            'plusName' => [
                'description'       => 'The plus name',
                'title'             => 'plusName',
            ],
            'plusDescription' => [
                'description'       => 'The plus description',
                'title'             => 'plusDescription',
            ],
            'plusHtml' => [
                'description'       => 'The plus html',
                'title'             => 'plusHtml',
            ],
            
            'minusId' => [
                'description'       => 'The minus id',
                'title'             => 'minusId',
            ],
            'minusName' => [
                'description'       => 'The minus name',
                'title'             => 'minusName',
            ],
            'minusDescription' => [
                'description'       => 'The minus description',
                'title'             => 'minusDescription',
            ],
            'minusHtml' => [
                'description'       => 'The minus html',
                'title'             => 'minusHtml',
            ],
            
            'multiplyId' => [
                'description'       => 'The multiply id',
                'title'             => 'multiplyId',
            ],
            'multiplyName' => [
                'description'       => 'The multiply name',
                'title'             => 'multiplyName',
            ],
            'multiplyDescription' => [
                'description'       => 'The multiply description',
                'title'             => 'multiplyDescription',
            ],
            'multiplyHtml' => [
                'description'       => 'The multiply html',
                'title'             => 'multiplyHtml',
            ],
            
            'dividedId' => [
                'description'       => 'The divided id',
                'title'             => 'dividedId',
            ],
            'dividedName' => [
                'description'       => 'The divided name',
                'title'             => 'dividedName',
            ],
            'dividedDescription' => [
                'description'       => 'The divided description',
                'title'             => 'dividedDescription',
            ],
            'dividedHtml' => [
                'description'       => 'The divided html',
                'title'             => 'dividedHtml',
            ],
            
            'awsId' => [
                'description'       => 'The aws id',
                'title'             => 'awsId',
            ],
            'awsName' => [
                'description'       => 'The aws name',
                'title'             => 'awsName',
            ],
            'awsDescription' => [
                'description'       => 'The aws description',
                'title'             => 'awsDescription',
            ],
            
        ];
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
    
    
    public function onRun()
    {
        
        $this->addJs('/plugins/jaychow/demo/assets/js/calculator.js');
        
        $content = $this->renderPartial('default.htm');
        return Response::make($content)->header('Content-Type', 'text/xml');
        
//        $this->addJs("https://cdn.snipcart.com/scripts/snipcart.js", [
//            'id' => 'snipcart', 
//            'data-api-key' => Settings::get('api_key')
//        ]);
//        $this->addCss("https://cdn.snipcart.com/themes/base/snipcart.min.css");
    } 
}