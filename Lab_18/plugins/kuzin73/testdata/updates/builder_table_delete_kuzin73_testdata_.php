<?php namespace Kuzin73\Testdata\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteKuzin73Testdata extends Migration
{
    public function up()
    {
        Schema::dropIfExists('kuzin73_testdata_');
    }
    
    public function down()
    {
        Schema::create('kuzin73_testdata_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191);
            $table->text('text');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
