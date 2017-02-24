<?php namespace JayChow\Demo\Components;

use Cms\Classes\ComponentBase;

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
        return [];
    }

    public function onRun() {
	    $this->addJs('/plugins/jaychow/demo/assets/js/calculator.js');
    }
}
