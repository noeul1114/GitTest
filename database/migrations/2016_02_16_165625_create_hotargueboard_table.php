<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotargueboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotargueboards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('headline', 100);
            $table->string('description');
            $table->string('writer', 100);
            $table->integer('up');
            $table->integer('down');
            $table->integer('neutral');
            $table->integer('vote_id');
            $table->integer('vote_nonid');
            $table->integer('revive_vote');
            $table->string('sort');
            $table->string('sort_board');
            $table->boolean('ifnotice');
            $table->integer('revival');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hotargueboards');
    }
}
