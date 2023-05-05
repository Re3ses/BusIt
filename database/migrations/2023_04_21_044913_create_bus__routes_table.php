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
        Schema::create('bus__routes', function (Blueprint $table) {
            $table->id();
            $table->string('route_destination');
            $table->smallInteger('route_fare');
            $table->smallInteger('route_distance'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus__routes');
    }
};
