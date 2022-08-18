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
            $table->string('periode')->nullable();
            $table->timestamps();
            $table->string('name');
            $table->double('c1', 15, 8)->nullable();
            $table->double('c2', 15, 8)->nullable();
            $table->double('c3', 15, 8)->nullable();
            $table->double('c4', 15, 8)->nullable();
            $table->double('c5', 15, 8)->nullable();
            $table->double('c6', 15, 8)->nullable();
            $table->double('c7', 15, 8)->nullable();
            $table->double('c8', 15, 8)->nullable();
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
