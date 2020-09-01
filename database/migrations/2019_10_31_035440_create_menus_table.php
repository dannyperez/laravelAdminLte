<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('Nombre del menú');
            $table->string('icon')->comment('Icono de menú');
            $table->integer('pid')->default(0)->comment('ID del menú principal');
            $table->integer('level')->comment('Nivel de menú');
            $table->string('url')->default('#')->comment('Dirección de ruta del menú');
            $table->integer('status')->default(1)->comment('Estado del menú, 0 está apagado, 1 está encendido');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
