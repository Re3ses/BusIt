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
        Schema::create('bus__data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('bus_platenumber');
            $table->string('bus_model');
            $table->string('bus_company');
            $table->smallInteger('bus_capacity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus__data');
    }
};
