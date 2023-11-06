<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasurementsTable extends Migration
{
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('animal_id'); // Change the data type to uuid
            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('height', 8, 2)->nullable();
            $table->decimal('condition_score', 4, 2)->nullable();
            $table->decimal('temp', 5, 2)->nullable();
            $table->integer('fec')->nullable();
            $table->integer('heart_rate')->nullable();
            $table->integer('respiratory_rate')->nullable();
            $table->integer('systolic_bp')->nullable();
            $table->integer('diastolic_bp')->nullable();
            $table->decimal('pulse_oximetry', 4, 1)->nullable();
            $table->date('date')->nullable();
            $table->timestamps();

            // Use 'uuid' for both columns in the foreign key relationship
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('measurements');
    }
}

