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
            $table->string('password')->nullable();
            $table->timestamps();
        });

        Schema::create('denuncias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('latLng');
            $table->string('nombreCalle');
            $table->string('img');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('intercanbios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->boolean('solicitado')->default(0);
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_usuario')->unsigned();
            $table->string('name_user');
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
            $table->integer('id_denuncia')->unsigned();
            $table->foreign('id_denuncia')->references('id')->on('denuncias')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->required();
            $table->string('descripcion',5000)->required();
            $table->string('img')->nullable();
            $table->boolean('prioritario')->default(0);
            $table->string('categoria')->default('Sin categoria');
            $table->timestamps();
        });

        Schema::create('debates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('mensaje');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
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
