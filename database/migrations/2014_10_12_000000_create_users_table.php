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
            $table->bigInteger('rol_id');
            $table->bigInteger('asesor_tese_id')->nullable();
            $table->string('nombre_usuario')->nullable();
            $table->string('apaterno_usuario')->nullable();
            $table->string('amaterno_usuario')->nullable();
            $table->string('matricula_usuario')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('domicilio_usuario')->nullable();
            $table->string('creditos_usuario')->nullable();
            $table->string('telefono_usuario')->nullable();
            $table->string('nombre_empresa')->nullable();
            $table->string('rfc_empresa')->nullable();
            $table->string('telefono_empresa')->nullable();
            $table->string('web_empresa')->nullable();
            $table->string('giro_empresa')->nullable();
            $table->string('direccion_empresa')->nullable();
            $table->string('nombre_dirige_documentacion')->nullable();
            $table->string('cargo_dirige_documentacion')->nullable();
            $table->string('horario_residencia')->nullable();
            $table->string('nombre_proyecto')->nullable();
            $table->string('beneficio_empresa')->nullable();
            $table->string('asesor_empresa')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
