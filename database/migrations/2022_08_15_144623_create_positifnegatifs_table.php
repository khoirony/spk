<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositifnegatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positifnegatifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_warga')->unique();
            $table->integer('tahun')->nullable();
            $table->double('c1')->nullable();
            $table->double('c2')->nullable();
            $table->double('c3')->nullable();
            $table->double('c4')->nullable();
            $table->double('c5')->nullable();

            $table->foreign('id_warga')->references('id')->on('wargas'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positifnegatifs');
    }
}
