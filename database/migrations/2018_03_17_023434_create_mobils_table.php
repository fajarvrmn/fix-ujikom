<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
             $table->increments('id');
            $table->string('nama');

           $table->integer('merekks_id')->unsigned();
            $table->foreign('merekks_id')->references('id')->on('merekks')->onUpdate('cascade')->onDelete('cascade');

            $table->string('tipe');
            $table->string('foto')->nullable();


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
        Schema::dropIfExists('mobils');
    }
}
