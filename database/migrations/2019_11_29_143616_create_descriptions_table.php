<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion', 200);
            $table->unsignedBigInteger('entradas_id');
            $table  ->foreign('entradas_id', 'descriptionentrada_entrada')
                    ->references('id')
                    ->on('entradas')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('salidas_id');
            $table  ->foreign('salidas_id', 'descriptionsalida_salida')
                    ->references('id')
                    ->on('salidas')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('descriptions');
    }
}
