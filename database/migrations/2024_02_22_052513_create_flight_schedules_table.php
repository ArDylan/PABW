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
        Schema::create('flight_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('airline_id')->constrained('airlines');
            $table->integer('flight_number');
            $table->integer('price');
            $table->integer('total_seat');
            $table->date('flight_date');
            $table->time('departure');
            $table->time('arrival');
            $table->string('from', 20);
            $table->string('destination', 20);
            $table->string('transit', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_schedules');
    }
};
