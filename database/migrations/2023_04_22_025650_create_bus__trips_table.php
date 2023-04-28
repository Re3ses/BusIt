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
            $table->integer('bus_id');
            $table->integer('driver_id');
            $table->integer('user_id');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('route_fare');
            $table->string('route_destination');
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
