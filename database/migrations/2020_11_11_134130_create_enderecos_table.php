<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id("id")->autoIncrement();
            $table->timestamps();
            $table->string("cep");
            $table->string("logradouro");
            $table->string("complemento");
            $table->string("bairro");
            $table->string("localidade");
            $table->string("uf");
            $table->string("ibge");
            $table->string("ddd");
            $table->string("siafi");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
