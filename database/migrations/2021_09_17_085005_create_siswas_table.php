<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('absen');
            $table->string('nama');
            $table->string('jk');
             $table->unsignedbigInteger('id_kelas');
             $table->timestamps();
             $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
