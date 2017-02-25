<?php namespace JayChow\Demo\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCalculatorsTable extends Migration
{
    public function up()
    {
        Schema::create('bohan_demo_calculators', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bohan_demo_calculators');
    }
}
