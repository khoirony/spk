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
            $table->string('name');
            $table->double('status_bangunan', 15, 8);
            $table->double('status_lahan', 15, 8);
            $table->double('luas_lantai', 15, 8);
            $table->double('jenis_lantai', 15, 8);
            $table->double('jenis_dinding', 15, 8);
            $table->double('fas_bab', 15, 8);
            $table->double('daya_listrik', 15, 8);
            $table->double('status_bantuan', 15, 8);
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
        Schema::dropIfExists('positifnegatifs');
    }
}
