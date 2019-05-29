<?php namespace Bsbvolmachten\Partners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenPartnersMain extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_partners_main', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('bsbvolmachten_partners_main', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}