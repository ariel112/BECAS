<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDocumentPeriodo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_periodo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_periodo',40);
            $table->integer('prom_global');
            $table->integer('prom_periodo');
            $table->string('nombre_historial',230);
            $table->string('nombre_forma03',230);
            $table->integer('becario_id')->unsigned();
            $table->foreign('becario_id')->references('id')->on('becarios')->onDelete('cascade');            
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
        Schema::dropIfExists('doc_periodo');
    }
}


