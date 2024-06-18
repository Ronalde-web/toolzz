<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importacoes', function (Blueprint $table) {
            $table->increments('id');   
            $table->date('date', 200);   
            $table->string('day', 15);       
            $table->string('week', 200);    
            $table->string('hour', 30);       
            $table->string('height', 30);  
            $table->integer('cadastradopor_id')->unsigned();
            $table->foreign('cadastradopor_id')->references('id')->on('users');
            $table->integer('atualizadopor_id')->unsigned();
            $table->foreign('atualizadopor_id')->references('id')->on('users'); 
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
        Schema::dropIfExists('importacoes');
    }
}
