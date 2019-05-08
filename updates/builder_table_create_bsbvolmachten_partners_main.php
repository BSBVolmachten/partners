<?php namespace BsbVolmachten\Partners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBsbvolmachtenPartnersMain extends Migration
{
    public function up()
    {
        Schema::create('bsbvolmachten_partners_main', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('url', 255);
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bsbvolmachten_partners_main');
    }
}
