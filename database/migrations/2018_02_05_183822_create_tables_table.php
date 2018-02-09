<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('debate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('denuncia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('img');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

        });

        Schema::create('intercanbio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->boolean('solicitado')->default(false);
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('mensaje', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_chat')->unsigned();
            $table->foreign('id_chat')->references('id')->on('chat')->onDelete('cascade');
        });

        Schema::create('respuesta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_debate')->unsigned();
            $table->foreign('id_debate')->references('id')->on('debate')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chat', function (Blueprint $table) {
            //
        });
    }
}
