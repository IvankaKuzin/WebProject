<?php namespace Kuzin73\Testdata\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKuzin73TestdataComments2 extends Migration
{
    public function up()
    {
        Schema::table('kuzin73_testdata_comments', function($table)
        {
            $table->string('comment');
            $table->dropColumn('coment');
        });
    }
    
    public function down()
    {
        Schema::table('kuzin73_testdata_comments', function($table)
        {
            $table->dropColumn('comment');
            $table->string('coment', 191);
        });
    }
}
