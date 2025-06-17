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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained('tour_packages');
            $table->string('name');
            $table->string('email');
            $table->string('phone', 20);
            $table->date('date');
            $table->integer('adults');
            $table->integer('children')->nullable();
            $table->text('message')->nullable();
            $table->enum('status', ['new', 'processing', 'responded', 'confirmed', 'cancelled'])->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
