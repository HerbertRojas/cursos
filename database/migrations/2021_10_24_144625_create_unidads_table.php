<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id')->nullable()->constrained('cursos');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->unsignedSmallInteger('orden');
            $table->foreignId('unidad_tipo_id')->nullable()->constrained('unidad_tipos');
            $table->string('titulo',200);
            $table->text('contenido')->nullable();
            $table->string('archivo')->nullable();
            $table->boolean('libre')->default(false);
            $table->unsignedTinyInteger('tiempo_unidad')->nullable()->comment('Total de minutos si aplica');
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
        Schema::dropIfExists('unidads');
    }
}
