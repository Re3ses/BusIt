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
        Schema::create('bus__drivers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('driver_firstname');
            $table->string('driver_lastname');
            $table->string('driver_contactnumber');
            $table->string('driver_licensenumber');
            $table->string('driver_licenseexpirydate');
            $table->date('driver_dateofbirth');
            $table->string('driver_isactive'); //Active or Inactive
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus__drivers');
    }
};
