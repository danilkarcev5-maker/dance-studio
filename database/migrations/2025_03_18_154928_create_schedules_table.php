<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('dance_type'); // Тип танца (балет, хип-хоп и т.д.)
            $table->string('day');        // День недели
            $table->time('time');         // Время занятия
            $table->string('teacher');    // Преподаватель
            $table->boolean('is_active')->default(true); // Статус (активно/неактивно)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}