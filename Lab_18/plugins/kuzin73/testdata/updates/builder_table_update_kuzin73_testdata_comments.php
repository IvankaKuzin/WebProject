<?php namespace Kuzin73\Testdata\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKuzin73TestdataComments extends Migration
{
    public function up()
    {
        Schema::table('kuzin73_testdata_comments', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kuzin73_testdata_comments', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
