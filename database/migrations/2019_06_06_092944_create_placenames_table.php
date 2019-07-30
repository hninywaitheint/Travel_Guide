<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacenamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placenames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('cid');
            $table->string('did');
            $table->binary('img');
            $table->string('placeName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('placenames');
    }
}
