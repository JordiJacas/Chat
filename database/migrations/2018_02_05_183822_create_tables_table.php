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
        Schema::create('chats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('debates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('denuncias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('img');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('intercanbios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->boolean('solicitado')->default(false);
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_chat')->unsigned();
            $table->foreign('id_chat')->references('id')->on('chats')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_debate')->unsigned();
            $table->foreign('id_debate')->references('id')->on('debates')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->timestamps();
        });

        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',30)->required();
            $table->string('descripcion')->required();
            $table->string('img')->nullable();
            $table->boolean('prioritario')->default(false);
            $table->integer('n_categoria')->default(1)->unsigned();
            $table->foreign('n_categoria')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::table('chat', function (Blueprint $table) {
            //
        });
    }
}
