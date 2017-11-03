<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobInternTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job-intern', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('job_description');
            $table->string('requirements');
            $table->date('time_posted');
            $table->string('employer');
            $table->string('employer_description');
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
        Schema::dropIfExists('job-intern');
    }
}
