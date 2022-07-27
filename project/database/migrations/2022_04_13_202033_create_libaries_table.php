<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatelibariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libaries', function (Blueprint $table) {
            $table->id();
            $table->string(column:'email');
            $table->string(column:'Имя');
            $table->string(column:'Фамилия');
            $table->string(column:'Отчество');
            $table->text(column:'Пароль');
            $table->string('Паспортные_данные');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libaries');
    }
}
