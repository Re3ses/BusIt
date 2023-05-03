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
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('user_id');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('route_fare');
            $table->string('route_destination');

            $table->foreign('bus_id')
              ->references('id')->on('bus__data')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('driver_id')
              ->references('id')->on('bus__drivers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')
              ->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
