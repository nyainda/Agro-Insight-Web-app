<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('yield_records', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('animal_id');
            $table->string('product');
            $table->float('quantity');
            $table->uuid('trace_number')->unique();
            $table->date('date');
            $table->string('quality');
            $table->string('grade');
            $table->float('price');
            $table->string('batch')->nullable();
            $table->string('collector')->nullable();
            $table->string('yield_method');
            $table->text('yield_description')->nullable();
            $table->time('yield_time');
            $table->timestamps();
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yield_records');
    }
};
