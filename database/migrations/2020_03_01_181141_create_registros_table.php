<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            
            $table->Increments('registro_id');

            $table->string('registro_tipo', 191)->nullable();
            $table->string('registro_nome', 191)->nullable();
            $table->string('registro_data', 191)->nullable();
            $table->string('registro_hora', 191)->nullable();

            $table->decimal('registro_taxa', 10, 2)->nullable();
            $table->string('registro_taxa_status', 191)->nullable();

            $table->timestamps();

            $table->integer('registro_users_id')->unsigned();
            $table->foreign('registro_users_id')->references('id')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
