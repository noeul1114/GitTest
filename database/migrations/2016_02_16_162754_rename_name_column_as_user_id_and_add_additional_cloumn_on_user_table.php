<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameNameColumnAsUserIdAndAddAdditionalCloumnOnUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('age');
            $table->string('writtenletter');
            $table->string('writtencomment');
            $table->string('votedargue');
            $table->integer('point');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('age');
            $table->dropColumn('writtenletter');
            $table->dropColumn('writtencomment');
            $table->dropColumn('votedargue');
            $table->dropColumn('point');
        });
    }
}
