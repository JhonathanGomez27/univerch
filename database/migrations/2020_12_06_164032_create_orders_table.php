<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //vendedor','comprador','producto','precio_unitario','cantidad','total','estado
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vendedor_id')->nullable();
            $table->bigInteger('comprador_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('precio_unitario')->nullable();
            $table->bigInteger('cantidad')->nullable();
            $table->mediumText('total')->nullable();
            $table->enum('estado', ['creado', 'aprovado', 'rechazado'])->nullable('creado');
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
        Schema::dropIfExists('orders');
    }
}
