<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');         // Имя отправителя
            $table->string('email');        // Email отправителя
            $table->text('message');        // Сообщение
            $table->boolean('is_resolved')->default(false); // Статус обработки (решено/не решено)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}