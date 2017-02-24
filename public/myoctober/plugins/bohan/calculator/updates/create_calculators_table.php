<?php namespace Bohan\Calculator\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCalculatorsTable extends Migration
{
    public function up()
    {
        Schema::create('jaychow_demo_calculators', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jaychow_demo_calculators');
    }
}
