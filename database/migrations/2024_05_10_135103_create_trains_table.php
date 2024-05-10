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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('brand_company', 20);
            $table->string('departure_station', 25);
            $table->string('arrive_station', 25);
            $table->time('departure_time');
            $table->time('arriving_time');
            $table->bigInteger('arrive_station');
            $table->integer('wagon_count')->nullable();
            $table->boolean('on_time')->default(true);
            $table->boolean('canceled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
