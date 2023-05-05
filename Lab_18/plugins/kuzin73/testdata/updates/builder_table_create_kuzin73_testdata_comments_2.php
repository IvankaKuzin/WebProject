<?php namespace Kuzin73\Testdata\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKuzin73TestdataComments2 extends Migration
{
    public function up()
    {
        Schema::create('kuzin73_testdata_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->string('coment');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kuzin73_testdata_comments');
    }
}
