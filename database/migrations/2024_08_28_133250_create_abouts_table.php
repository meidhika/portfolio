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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->date('birthday')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone_number')->nullable();
            $table->string('website')->nullable();
            $table->string('age')->nullable();
            $table->string('degree')->nullable();
            $table->string('job')->nullable();
            $table->string('photo', length:255)->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->text('description2')->nullable();
            $table->text('fb_link')->nullable();
            $table->text('ig_link')->nullable();
            $table->text('linkedin_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
