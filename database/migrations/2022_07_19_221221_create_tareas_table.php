<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->string('descripcion')->nullable();
            $table->tinyInteger('finalizada')->default(0);
            $table->timestamp('fecha_limite');
            $table->tinyInteger('urgencia')->coment('0: No es urgente, 1: Urgencia normal, 2: Muy urgente');
            $table->softDeletes();
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
        Schema::dropIfExists('tareas');
    }
};
