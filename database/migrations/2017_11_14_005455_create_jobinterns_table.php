<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobinternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobinterns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('job_description');
            $table->text('requirements');
            $table->date('time_posted');
            $table->string('employer');
            $table->text('employer_description');
            $table->string('majors');
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
        Schema::dropIfExists('jobinterns');
    }
}
