<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerbobotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terbobots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_warga')->unsigned();
            $table->string('periode')->nullable();
            $table->timestamps();
            $table->double('c1', 15, 8)->nullable();
            $table->double('c2', 15, 8)->nullable();
            $table->double('c3', 15, 8)->nullable();
            $table->double('c4', 15, 8)->nullable();
            $table->double('c5', 15, 8)->nullable();
            $table->double('c6', 15, 8)->nullable();
            $table->double('c7', 15, 8)->nullable();
            $table->double('c8', 15, 8)->nullable();

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
        Schema::dropIfExists('terbobots');
    }
}
