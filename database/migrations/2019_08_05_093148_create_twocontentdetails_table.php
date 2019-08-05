<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwocontentdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twocontentdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pid');
            $table->binary('img1');
            $table->text('content1');
            $table->binary('img2');
            $table->text('content2');
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
        Schema::dropIfExists('twocontentdetails');
    }
}
