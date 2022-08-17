<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_warga')->unsigned();
            $table->string('periode')->nullable();
            $table->double('nilai', 15, 8)->nullable();
            $table->integer('rangking')->nullable();;
            $table->timestamps();

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
        Schema::dropIfExists('preferensis');
    }
}
