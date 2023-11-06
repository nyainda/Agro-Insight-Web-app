<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('content')->nullable();
            $table->date('date')->nullable();
            $table->string('category')->nullable();
            $table->text('keywords')->nullable();
            $table->time('time')->nullable();
            $table->string('file')->nullable();
            $table->uuid('animal_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('add_to_calendar')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');

            // Add any additional fields or modifications you need.
        });
    }

    public function down()
    {
        Schema::dropIfExists('notes');
    }
}

