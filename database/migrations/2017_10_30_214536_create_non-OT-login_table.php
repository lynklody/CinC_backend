<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonOTLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non-OT-login', function (Blueprint $table) {
            $table->integer('account_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('department/major');
            $table->date('graduation_year');
            $table->string('priority');
            $table->string('action');
            $table->date('action_time');
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
        Schema::dropIfExists('non-OT-login');
    }
}
