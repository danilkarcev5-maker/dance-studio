<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');           // Название (например, "Выступление 2025")
            $table->string('file_path');       // Путь к файлу (фото/видео)
            $table->string('file_type');       // Тип файла (image, video)
            $table->text('description')->nullable(); // Описание
            $table->boolean('is_public')->default(true); // Видимость (публичное/скрытое)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}