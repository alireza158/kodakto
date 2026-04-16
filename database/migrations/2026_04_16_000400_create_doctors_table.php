<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('specialty');
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->text('bio')->nullable();
            $table->decimal('rating', 2, 1)->default(4.5);
            $table->unsignedInteger('successful_appointments')->default(0);
            $table->unsignedTinyInteger('recommendation_percent')->default(0);
            $table->string('image_path')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
