<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('berkualitas');
            $table->string('berbudi');
            $table->string('berdaya');
            $table->string('berhasil');
            $table->bigInteger('id_siswa')->unsigned();
            $table->bigInteger('id_kelas')->unsigned();
            $table->bigInteger('id_guru')->unsigned();
            $table->string('keterangan');
            $table->timestamps();
            $table->foreign('id_siswa')->references('id')->on('siswas')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade');             
            $table->foreign('id_guru')->references('id_guru')->on('gurus')->onDelete('cascade'); 
          
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}
