<?php namespace bohan2\calculator\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCalculatorsTable extends Migration
{
    public function up()
    {
        Schema::create('bohan_calculator_calculators', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bohan_calculator_calculators');
    }
}
