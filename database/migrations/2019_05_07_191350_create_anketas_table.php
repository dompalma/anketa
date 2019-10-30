<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnketasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anketas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('R.id');
            $table->foreign('respondents_id')->references('id')->on('anketas')->onDelete('cascade');
            $table->string('phone', 10);
            $table->string('webserv', 50);
            $table->string('wifi', 10);
            $table->string('frequence', 50);
            $table->longText('devices');
            $table->mediumText('text');
            $table->boolean('robot');
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
        Schema::dropIfExists('anketas');
    }
}
