<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventFeed', function (Blueprint $table) {
            $table->increments('id');
            $table->time('post_time');
            $table->string('category');
            $table->string('title');
            $table->string('content');
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
        Schema::dropIfExists('eventFeed');
    }
}
