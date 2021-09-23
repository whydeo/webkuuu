<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailnilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailnilais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('A');
            $table->string('B');
            $table->string('C');
            $table->string('D');
            $table->string('E');
            $table->string('F');
            $table->string('G');
            $table->string('H');
            $table->string('I');
            $table->string('J');
            $table->string('K');
            $table->string('L');
            $table->string('M');
            $table->string('N');
            $table->string('O');
            $table->string('P');
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
        Schema::dropIfExists('detailnilais');
    }
}
