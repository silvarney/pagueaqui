<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePgAguaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pg_agua', function (Blueprint $table) {
            $table->bigIncrements('pg_agua_id');

            $table->string('pg_agua_cbarra', 500)->nullable();
            $table->string('pg_agua_vencimento', 500)->nullable();
            $table->decimal('pg_agua_valor', 10, 2)->nullable();
            $table->decimal('pg_agua_valor_total', 10, 2)->nullable();
            $table->string('pg_agua_data', 191)->nullable();
            $table->string('pg_agua_hora', 191)->nullable();
            $table->decimal('pg_agua_taxa', 10, 2)->nullable();
            $table->string('pg_agua_taxa_status', 191)->nullable();
            $table->string('pg_agua_status', 191)->nullable();
            

            $table->timestamps();

            $table->integer('pg_agua_users_id')->unsigned();
            $table->foreign('pg_agua_users_id')->references('id')->on('users')->onDelete('cascade'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pg_agua');
    }
}
