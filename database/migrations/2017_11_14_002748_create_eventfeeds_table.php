<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventfeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventfeeds', function (Blueprint $table) {
            $table->increments('id');
            $table->time('post_time');
            $table->string('title');
            $table->text('content');
            $table->boolean('for_student');
            $table->boolean('for_faculty');
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
        Schema::dropIfExists('eventfeeds');
    }
}
