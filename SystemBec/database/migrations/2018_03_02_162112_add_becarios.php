<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBecarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',150);
            $table->date('fecha_nacimiento');
            $table->string('identidad',18);
            $table->string('direccion',150);
            $table->string('longitud',90)->nullable();
            $table->string('latitud',90)->nullable();
            $table->double('telefono',18);
            $table->string('correo',90)->nullable();
            $table->string('universidad',80);
            $table->string('carrera',80);
            $table->string('cuenta_bancaria',80)->nullable();
            $table->string('nombre_banco',80)->nullable();
            $table->enum('genero',['Masculino','Femenino']);
            $table->enum('cargo',['Guia','Becario','Embajador'])->default('Becario');
            $table->string('password',99)->nullable();
            $table->integer('id_guia')->nullable();
            
            /*nombre para la ubicacion de la identidad*/
            $table->string('nombre_id',230)->nullable();

            /*Encargados madre*/
            $table->string('nombre_madre',90)->nullable();
            $table->string('identidad_madre',18)->nullable();
            $table->string('ocupacion_madre',90)->nullable();
            $table->string('empresa_madre',90)->nullable();
            $table->double('telefono_madre',18)->nullable();
            $table->string('correo_madre',80)->nullable();
            $table->string('direccion_madre',90)->nullable();

            /*Encargados padre*/
            $table->string('nombre_padre',90)->nullable();
            $table->string('identidad_padre',18)->nullable();
            $table->string('ocupacion_padre',60)->nullable();
            $table->string('empresa_padre',50)->nullable();
            $table->double('telefono_padre',19)->nullable();
            $table->string('correo_padre',90)->nullable();
            $table->string('direccion_padre',90)->nullable();

              /* Estado del becario*/
            $table->string('descripcion',400)->nullable();
            $table->timestamp('fecha_estado')->nullable();
            $table->enum('estado',['Practica','Activo','Desactivo'])->default('Activo');

            /*Actualizacion de documentos*/
            $table->enum('actualizacion',['Actualizados','Desactualizados'])->default('Desactualizados');
            /*Tipo de periodo si son semestrales o trimestrales*/
            $table->string('tipo_periodo',40);

   
            $table->timestamps();

            /*relaciones entre las demas tablas*/
            $table->integer('departamento_id')->unsigned()->nullable();
            $table->integer('grupo_id')->unsigned()->nullable();

            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');

             /*Relaciones con la imagen*/
            $table->integer('image_id')->unsigned()->nullable();
            $table->foreign('image_id')->references('id')->on('images');
            



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('becarios');
    }
}
