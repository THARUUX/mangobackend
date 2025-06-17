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
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('type', ['tailor-made', 'round-tour']);
            $table->decimal('price', 10, 2);
            $table->string('duration');
            $table->string('short_description');
            $table->text('description');
            $table->string('image');
            $table->boolean('featured')->default(false);
            $table->boolean('active')->default(true);
            $table->string('locations');
            $table->json('included')->nullable();
            $table->json('excluded')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_packages');
    }
};
