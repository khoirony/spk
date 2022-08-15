<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('status_bangunan');
            $table->integer('status_lahan');
            $table->integer('luas_lantai');
            $table->integer('jenis_lantai');
            $table->integer('jenis_dinding');
            $table->integer('fas_bab');
            $table->integer('daya_listrik');
            $table->integer('status_bantuan');
            $table->foreignId('id_warga')->unique();
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
        Schema::dropIfExists('alternatifs');
    }
}
