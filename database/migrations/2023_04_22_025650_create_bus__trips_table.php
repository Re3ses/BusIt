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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('route_id');
            $table->time('departure_time');
            $table->time('arrival_time');

            $table->foreign('bus_id')
              ->references('id')->on('bus__data')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')
              ->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('route_id')
              ->references('id')->on('bus__routes')->onUpdate('cascade')->onDelete('cascade');
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
