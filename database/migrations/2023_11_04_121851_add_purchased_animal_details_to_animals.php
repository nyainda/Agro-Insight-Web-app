<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPurchasedAnimalDetailsToAnimals extends Migration
{
    public function up()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->string('purchasedAnimal')->nullable();
            $table->date('purchaseDate')->nullable();
            $table->decimal('purchasePrice')->nullable();
            $table->string('vendor')->nullable();
            $table->string('treatments')->nullable();
            $table->string('deficts')->nullable();
            $stable->string('healthStatus')->nullable();
        });

    }

    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->dropColumn('purchasedAnimal');
            $table->dropColumn('purchaseDate');
            $table->dropColumn('purchasePrice');
            $table->dropColumn('treatments');
            $table->dropColumn('deficts');
            $table->dropColumn('vendor');
            $table->dropColumn('healthStatus');
        });
    }
}

