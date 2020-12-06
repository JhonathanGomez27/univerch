<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePqrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_q_r_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100)->nullable();
            $table->enum('type', ['petition', 'complaint', 'claims'])->nullable('petition');
            $table->mediumText('content')->nullable();
            $table->mediumText('response')->nullable('Sin respuesta');
            $table->enum('status', ['review', 'finished'])->nullable('review');
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('user_id')->nullable();
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
        Schema::dropIfExists('p_q_r_s');
    }
}
