<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario');
            $table->string('correo')->unique();
            $table->string('contraseña');
            $table->timestamp('fecha_registro')->nullable();
            $table->integer('seguidores')->default(0);
            $table->integer('num_posts')->default(0);
            $table->timestamps(); // Agrega las columnas created_at y updated_at
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
