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
        Schema::create('bus__trips', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('route_id');
            $table->integer('bus_id');
            $table->integer('driver_id');
            $table->integer('user_id');
            $table->dateTime('departure_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus__trips');
    }
};
