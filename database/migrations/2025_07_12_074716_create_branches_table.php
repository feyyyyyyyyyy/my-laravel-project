<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id(); // Id (primary key)
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->string('logo', 255)->nullable(); // Allow null for logo
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};