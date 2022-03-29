<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasProductitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras_productitos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idCompra')->unsigned();
            $table->bigInteger('idProducto')->unsigned();
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
        Schema::dropIfExists('compras_productitos');
    }
}
