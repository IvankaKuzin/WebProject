<?php namespace Kuzin73\Testdata\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKuzin73Testdata extends Migration
{
    public function up()
    {
        Schema::create('kuzin73_testdata_news', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('text');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kuzin73_testdata_news');
    }
}