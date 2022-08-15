<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnegatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dnegatifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_warga')->unique();
            $table->integer('tahun')->nullable();
            $table->timestamps();
            $table->double('nilai', 15, 8)->nullable();

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
        Schema::dropIfExists('dnegatifs');
    }
}
