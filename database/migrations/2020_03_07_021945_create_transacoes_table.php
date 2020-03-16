<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacoes', function (Blueprint $table) {
            $table->Increments('transacao_id');

            $table->decimal('transacao_valor', 10, 2)->nullable();
            $table->string('transacao_tipo', 191)->nullable();
            $table->string('transacao_operacao', 191)->nullable();
            $table->string('transacao_data', 191)->nullable();
            $table->string('transacao_hora', 191)->nullable();
            $table->string('transacao_status', 191)->nullable();
            
            $table->timestamps();

            $table->integer('transacao_users_id')->unsigned();
            $table->foreign('transacao_users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transacoes');
    }
}
