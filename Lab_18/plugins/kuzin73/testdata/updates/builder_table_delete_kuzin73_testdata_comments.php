<?php namespace Kuzin73\Testdata\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteKuzin73TestdataComments extends Migration
{
    public function up()
    {
        Schema::dropIfExists('kuzin73_testdata_comments');
    }
    
    public function down()
    {
        Schema::create('kuzin73_testdata_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('comments', 191);
            $table->timestamp('created_at')->nullable();
            $table->text('name');
            $table->timestamp('updated_at')->nullable();
        });
    }
}
