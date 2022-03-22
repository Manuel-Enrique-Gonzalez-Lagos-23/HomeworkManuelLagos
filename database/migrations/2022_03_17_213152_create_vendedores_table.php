<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->id();
            $table->string("Nombre");
            $table->string("Apellido");
            $table->integer("Edad");
            $table->string("Domicilio");
            $table->string("Numero_de_telefono");
            $table->string("Email");
            $table->string("Nombre_de_usuario");
            $table->string("Contraseña");
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
        Schema::dropIfExists('vendedores');
    }
}
