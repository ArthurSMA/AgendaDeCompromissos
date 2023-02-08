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
        Schema::create('compromissos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 60);
            $table->date('data');
            $table->time('horaInicio');
            $table->time('horaFim');
            $table->string('local', 50);
            $table->string('status', 25);
            $table->string('observacoes', 120)->nullable();
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
        Schema::dropIfExists('compromissos');
    }
};
