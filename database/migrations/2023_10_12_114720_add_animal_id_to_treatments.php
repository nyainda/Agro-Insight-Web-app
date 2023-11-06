<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnimalIdToTreatments extends Migration
{
    public function up()
    {
        Schema::table('treatments', function (Blueprint $table) {
            $table->uuid('animal_id')->nullable()->default(null)->after('id');
        });
    }

    public function down()
    {
        Schema::table('treatments', function (Blueprint $table) {
            $table->dropColumn('animal_id');
        });
    }
}

