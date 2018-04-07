<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetaillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detaills', function (Blueprint $table) {
           $table->increments('id');
            $table->string('keadaan');
            $table->string('transmisi');
            $table->string('bahanbkr');
            $table->string('thnklr');
            $table->string('harga');
            $table->text('desk');

            $table->integer('mobils_id')->unsigned();
            $table->foreign('mobils_id')->references('id')->on('mobils')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('detaills');
    }
}
