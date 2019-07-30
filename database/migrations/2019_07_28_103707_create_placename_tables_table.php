<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacenameTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placename_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cid');
            $table->string('did');
            $table->binary('img');
            $table->string('placeName');
            $table->string('placename_lat');
            $table->string('placeName_long');
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
        Schema::dropIfExists('placename_tables');
    }
}
